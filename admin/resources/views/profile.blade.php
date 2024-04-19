    @extends('layouts.mainlayout')
	 @section('title')
		<title>My Profile - ErrandCity</title>
    @endsection
	 @section('css')
		<style>
		
		.xx li {

	width:unset;
	background: white;
border-radius: 10px;
padding-bottom: unset;
padding: 5px 5px 5px 5px;

margin-right:20px;
	
}

.xx li:hover{
	background: #9E9FA0;
	color:white;
}

.del i:hover{
	color: red;
}
.xx li:last-child{
	margin-bottom:unset;
}
		</style>
    @endsection
    @section('content')
       
	                            <!-- dashboard content-->
                            <div class="col-md-9">
                               
                                <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>My Profile</h3>
                                </div>
                                <!-- dashboard-list-box--> 
                                <div class="dashboard-list-box  fl-wrap">
                                    <!-- dashboard-list end-->    
                                     <div class="box-widget-item fl-wrap block_box">
                                        <div class="box-widget-item-header">
                                               <div style="width:40%; float:right;text-align: right;"> <a href="edit-profile" class="btn color2-bg " style="padding: 5px 10px 5px 10px;">Edit</a></div>
											<div style="width:40%;"><h3>Personal Details</h3></div>
                                         
                                        
											<!-- <button class="btn color2-bg" onclick="window.location.href='booking.html'">Book Table Now <i class="fal fa-bookmark"></i></button> -->
                                        </div>
										 
                                        <div class="box-widget">
                                            
                                            <div class="box-widget-content bwc-nopad">
                                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                                    <ul class="no-list-style">
													
                                                      
														 <li><span><i class="fal fa-map-marker"></i> Firstname :</span> <a href="#"></a></li>
														 <li><span><i class="fal fa-map-marker"></i> Lastname :</span> <a href="#"></a></li>
                                                        <li><span><i class="fal fa-phone"></i> Address :</span> <a href="#"></a></li>
                                                       
                                                        <li><span><i class="fal fa-browser"></i> Phone :</span> <a href="#"></a></li>
                                                        <li><span><i class="fal fa-browser"></i> Email :</span> <a href="#"></a></li>
                                                        
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
										
										
                                    </div>
									
									
									
									
									
                                    <!-- dashboard-list end-->                                           
                                </div>
                                <!-- dashboard-list-box end--> 
                            </div>
						
                            <!-- dashboard content end-->
    @endsection
   