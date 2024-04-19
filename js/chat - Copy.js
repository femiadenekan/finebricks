$(function () {
   let pusher = new Pusher($("#pusher_app_key").val(), {
        cluster: $("#pusher_cluster").val(),
        encrypted: true
    });
 
    let channel = pusher.subscribe('chat');
 
 
    
   
});
 
 
/**
 * loaderHtml
 *
 * @returns {string}
 */
function loaderHtml() {
    return '<i class="glyphicon glyphicon-refresh loader"></i>';
}
 
/**
 * getMessageSenderHtml
 *
 * this is the message template for the sender
 *
 * @param message
 * @returns {string}
 */
function getMessageSenderHtml(message)
{
    return `<div class="chat-message chat-message_guest fl-wrap" data-message-id="${message.id}">
                        <div class="dashboard-message-avatar">
                            <img src="`+'images/avatar/4.jpg'+`" alt="">
                        </div>
                        <span class="chat-message-user-name">${message.fromUserName}</span>
                        <span class="massage-date">${message.dateHumanReadable}</span>
                        <p>${message.content}</p>
                    </div>`
	
	
	;
}
 
/**
 * getMessageReceiverHtml
 *
 * this is the message template for the receiver
 *
 * @param message
 * @returns {string}
 */
function getMessageReceiverHtml(message)
{
    return `<div class="chat-message chat-message_user fl-wrap" data-message-id="${message.id}">
                        <div class="dashboard-message-avatar">
                            <img src="` + base_url +  '/images/user-avatar.png' + `" alt="">
                        </div>
                        <span class="chat-message-user-name">${message.fromUserName}</span>
                        <span class="massage-date">${message.dateHumanReadable}</span>
                        <p>${message.content}</p>
                    </div>
    `;
}
 

/**
 * loadLatestMessages
 *
 * this function called on load to fetch the latest messages
 *
 * @param container
 * @param user_id
 */
function loadLatestMessages(container, user_id)
{
    let chat_area = container.find(".chat-area");
 
    chat_area.html("");
 
    $.ajax({
        url: base_url + "/load-latest-messages",
        data: {user_id: user_id, _token: $("meta[name='csrf-token']").attr("content")},
        method: "GET",
        dataType: "json",
        beforeSend: function () {
            if(chat_area.find(".loader").length  == 0) {
                chat_area.html(loaderHtml());
            }
        },
        success: function (response) {
            if(response.state == 1) {
                response.messages.map(function (val, index) {
                    $(val).appendTo(chat_area);
                });
            }
        },
        complete: function () {
            chat_area.find(".loader").remove();
        }
    });
}
    
    
	
	
    // on change chat input text toggle the chat btn disabled state
    $(".chat_input").on("change keyup", function (e) {
       if($(this).val() != "") {
           $(this).parents(".form-controls").find(".btn-chat").prop("disabled", false);
       } else {
           $(this).parents(".form-controls").find(".btn-chat").prop("disabled", true);
       }
    });
 
 
    // on click the btn send the message
   $(".btn-chat").on("click", function (e) {
       send($(this).attr('data-to-user'), $("#chat_box_" + $(this).attr('data-to-user')).find(".chat_input").val());
   });
 
   // listen for the send event, this event will be triggered on click the send btn
    channel.bind('send', function(data) {
        displayMessage(data.data);
    });
});
 
/**
 * send
 *
 * this function is the main function of chat as it send the message
 *
 * @param to_user
 * @param message
 */
function send(to_user, message)
{
    let chat_box = $("#chat_box_" + to_user);
    let chat_area = chat_box.find(".chat-area");
 
    $.ajax({
        url: base_url + "/send",
        data: {to_user: to_user, message: message, _token: $("meta[name='csrf-token']").attr("content")},
        method: "POST",
        dataType: "json",
        beforeSend: function () {
            if(chat_area.find(".loader").length  == 0) {
                chat_area.append(loaderHtml());
            }
        },
        success: function (response) {
        },
        complete: function () {
            chat_area.find(".loader").remove();
            chat_box.find(".btn-chat").prop("disabled", true);
            chat_box.find(".chat_input").val("");
            chat_area.animate({scrollTop: chat_area.offset().top + chat_area.outerHeight(true)}, 800, 'swing');
        }
    });
}
 
/**
 * This function called by the send event triggered from pusher to display the message
 *
 * @param message
 */
function displayMessage(message)
{
    let alert_sound = document.getElementById("chat-alert-sound");
 
    if($("#current_user").val() == message.from_user_id) {
 
        let messageLine = getMessageSenderHtml(message);
 
        $("#chat_box_" + message.to_user_id).find(".chat-area").append(messageLine);
 
    } else if($("#current_user").val() == message.to_user_id) {
 
        alert_sound.play();
 
        // for the receiver user check if the chat box is already opened otherwise open it
        cloneChatBox(message.from_user_id, message.fromUserName, function () {
 
            let chatBox = $("#chat_box_" + message.from_user_id);
 
            if(!chatBox.hasClass("chat-opened")) {
 
                chatBox.addClass("chat-opened").slideDown("fast");
 
                loadLatestMessages(chatBox, message.from_user_id);
 
                chatBox.find(".chat-area").animate({scrollTop: chatBox.find(".chat-area").offset().top + chatBox.find(".chat-area").outerHeight(true)}, 800, 'swing');
            } else {
 
                let messageLine = getMessageReceiverHtml(message);
 
                // append the message for the receiver user
                $("#chat_box_" + message.from_user_id).find(".chat-area").append(messageLine);
            }
        });
    }
}