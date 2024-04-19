$(function() {

    var newHash      = "",
        $mainContent = $("#mapp"),
        $pageWrap    = $("#cont"),
        baseHeight   = 0,
        $el;
        
    $pageWrap.height($pageWrap.height());
    baseHeight = $pageWrap.height() - $mainContent.height();
    
    $("#test").click(function() {
        window.location.hash = $(this).attr("href");
        return false;
    });
    
    $(window).bind('hashchange', function(){
    
        newHash = window.location.hash.substring(1);
        
        if (newHash) {
            $mainContent
                .find("#map-main")
                .fadeOut(200, function() {
                    $mainContent.hide().load(newHash + " #map-main", function() {
                        $mainContent.fadeIn(200, function() {
                            $pageWrap.animate({
                                height: baseHeight + $mainContent.height() + "px"
                            });
                        });
                       
                    });
                });
        };
        
    });
    
    $(window).trigger('hashchange');

});