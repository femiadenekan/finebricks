    @extends('layouts.landinglayout')
    @section('css')
	
	 <link type="text/css" rel="stylesheet" href="{{ asset('css/shop.css') }}">
    @endsection
    @section('content')
       
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <section class="gray-bg no-top-padding-sec" id="sec1">
                        <div class="container" style="margin-top: 30px;">
                          <div class="col-lg-11" style="float:none;margin:auto;">
                            <div class="fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- list-single-main-item --> 
                                        <div class="user-profile-header fl-wrap">
                                            <div class="user-profile-header_media fl-wrap">
                                                <div class="bg"  data-bg="{{ asset('images/user_bg.jpg') }}"></div>
                                                <div class="user-profile-header_media_title">
                                                    <h3 style="font-size:30px;">{{ $user->firstname }} {{ $user->lastname }}</h3>
                                                    <h4> </h4>
                                                </div>
                                               
                                                
                                            </div>
                                            <div class="user-profile-header_content fl-wrap">
                                                 
											<div class="user-profile-header-avatar">
                                                    <img src="{{ asset( $user->image ) }}" alt="">
                                            </div>
											<div style="float: right;text-align: left;color: #878c9f; font-size: 14px;">
												 <h4 style="margin-bottom: 5px;">Location: {{ $user->location }}</h3>
                                                    <h4><span><i class="fas fa-map-marker-alt"></i>  Office Address:</span> {{ $user->address }}</h4>
                                             </div>   
                                                
                                                
                                            </div>
                                        </div>
										
										
										<div class="list-single-main-item fl-wrap block_box">
                                            <div class="list-single-main-item-title">
                                                <h3>About {{ $user->firstname }}</h3>
                                            </div>
                                            <div class="list-single-main-item_content fl-wrap">
                                                <p>{{ $user->about }}  </p>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end --> 
										
							
										 
                                           

										
											<div class="listing-item" style="width: 100%;">
																<div class="list-single-main-item-title">
                                                <h3>{{ $user->firstname }}'s Up-line</h3>
                                            </div>
											@isset($user->referred)
											<article class="geodir-category-listing fl-wrap">
																	   <div style="width:25%; " class="listing-avatar" >
																		 <div class="widget-posts-img" style="width:100%;" ><a href=""><img src="{{ asset($user->referred->image) }}" alt="" style="margin: 15px 0 auto 10px; border-radius: 100%; padding: 5px;"></a>  
																		</div>   
																		</div>
																
																
																
																	<div class="geodir-category-content fl-wrap title-sin_item" style="width: 70%;float: right; ;padding-top: 30px;">
																		<div class="geodir-category-content-title fl-wrap" style="padding: 2px 0 20px;">
																			<div class="geodir-category-content-title-item">
																				<h3 class="title-sin_map"><a href="{{ URL('realtor/'.$user->referred->slug) }}">{{ $user->referred->firstname }} {{ $user->referred->lastname }}</a></h3>
																				<div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{ $user->referred->address }}</a></div>
																			</div>
																		</div>
																		
																		
																		
																		<div class="geodir-category-text realtor-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">About.</p>
																			
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fal fa-phone"></i> Mobile: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $user->referred->mobile }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fab fa-whatsapp"></i> Whatsapp: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $user->referred->mobile }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="far fa-envelope"></i> Email: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $user->referred->email }}</li>
																				</ul>
																			</div>
																		</div>				
																		
																		
																		<div class="geodir-category-text realtor-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">Account Details</p>
																			
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title">Account Name: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Account Name">{{ $user->referred->account_name}}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"> Bank Name: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Bank">{{ $user->referred->bankname }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"> Account Number: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Number">{{ $user->referred->account_number }}</li>
																				</ul>
																			</div>
																		</div>
																		<div class="geodir-category-footer fl-wrap">
																			<a class="listing-item-category-wrap">
																				<div class="listing-item-category green-bg"><i class="fal fa-use"></i></div>
																				<span>Realtor</span>
																			</a>
																			<div class="geodir-opt-list">
																				<ul class="no-list-style">
																					
																					Joined: {{ \Carbon\Carbon::parse($user->referred->created_at)->diffForHumans() }}
																				</ul>
																			</div>
																		
																		</div>
																	</div>
																</article>
											@else
												<h3 style="font-size: 35px;font-weight: 600;color: #69789763;">{{ $user->firstname }} was not refered</h3>

											@endisset
											</div>
												
                                      
										
                                        <!-- list-main-wrap-header end-->                            
                                        <!-- listing-item-container -->
										<div class="list-single-main-item fl-wrap block_box" style="margin-bottom: unset;margin-top: 60px;">
                                            <div class="list-single-main-item-title">
                                                <h3>{{ $user->firstname }}'s Down-line</h3>
                                            </div>
                                           
                                        </div>
                                      
                                         @if(!empty($refusers)) 
											@foreach ($refusers as $use) 
											
											
											<div id="list1">
												<div class="listing-item" style="height: 253px; width: 100%;">
																<article class="geodir-category-listing fl-wrap">
																	   <div style="width:25%; " class="listing-avatar" >
																		 <div class="widget-posts-img" style="width:100%;" ><a href=""><img src="{{ asset($use->image) }}" alt="" style="margin: 15px 0 auto 10px; border-radius: 100%; padding: 5px;"></a>  
																		</div>   
																		</div>
																
																
																
																	<div class="geodir-category-content fl-wrap title-sin_item" style="width: 70%;float: right; ;padding-top: 30px;">
																		<div class="geodir-category-content-title fl-wrap" style="padding: 2px 0 20px;">
																			<div class="geodir-category-content-title-item">
																				<h3 class="title-sin_map"><a href="{{ URL('realtor/'.$use->slug) }}">{{ $use->firstname }} {{ $use->lastname }}</a></h3>
																				<div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{ $use->address }}</a></div>
																			</div>
																		</div>
																			@isset($use->referred)
																		<div class="geodir-category-text fl-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">Up-line.</p>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><a href="{{ URL('realtor/'.$use->referred->slug) }}"><i class="fal fa-user"></i>   {{$use->referred->firstname}} {{$use->referred->lastname}} </a></div>
																			</div>
																		</div>
																		@endisset
																		
																		
																		<div class="geodir-category-text realtor-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">About.</p>
																			
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fal fa-phone"></i> Mobile: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $use->mobile }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fab fa-whatsapp"></i> Whatsapp: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $use->mobile }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="far fa-envelope"></i> Email: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $use->email }}</li>
																				</ul>
																			</div>
																		</div>				
																		
																		
																		<div class="geodir-category-text realtor-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">Account Details</p>
																			
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title">Account Name: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Account Name">{{ $use->account_name}}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"> Bank Name: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Bank">{{ $use->bankname }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"> Account Number: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Number">{{ $use->account_number }}</li>
																				</ul>
																			</div>
																		</div>
																		<div class="geodir-category-footer fl-wrap">
																			<a class="listing-item-category-wrap">
																				<div class="listing-item-category green-bg"><i class="fal fa-use"></i></div>
																				<span>Realtor</span>
																			</a>
																			<div class="geodir-opt-list">
																				<ul class="no-list-style">
																					
																					Joined: {{ \Carbon\Carbon::parse($use->created_at)->diffForHumans() }}
																				</ul>
																			</div>
																		
																		</div>
																	</div>
																</article>
															</div>
												</div>		
														@endforeach
											@elseif($refusers->count() == 0))
											
											<h3 style="font-size: 35px;font-weight: 600;color: #69789763;">No Users Invited Yet by {{$userscode->firstname}}</h3>

											
											@endif												
													
                                            

                                       
                                        <!-- listing-item-container end -->
                                   
                                  
                                  
                                        <!-- listing-item-container end -->
                                    </div>
                                    <div class="col-md-4">
                                         <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap block_box">
                                            <div class="box-widget-item-header">
                                                <h3>Activity </h3>
                                            </div>
                                            <div class="box-widget">
                                                <div class="box-widget-author fl-wrap">
                                                    <div class="box-widget-author-title">
                                                        <div class="box-widget-author-title-img">
                                                            <img src="{{ asset( $user->image ) }}" alt=""> 
                                                        </div>
                                                        <div class="box-widget-author-title_content">
                                                            <a href="{{URL('/down-line/'.$user->slug)}}">{{ $user->firstname }}
                                                            <span> Referred {{$refusers->count()}} Person(s)</span></a>
                                                        </div>
                                                        <div class="box-widget-author-title_opt">
                                                            <a href="#" class="tolt color-bg cwb" data-microtip-position="top" data-tooltip="Chat With {{ $user->name }}"><i class="fas fa-comments-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                  
                                                                      
                                          <!--box-widget-item -->                                       
                                        <div class="box-widget-item fl-wrap block_box">
                                            <div class="box-widget-item-header">
                                                <h3>Contact </h3>
                                            </div>
                                            <div class="box-widget">
												<div class="box-widget-content bwc-nopad">
                                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Mobile :</span> <a href="#">{{ $user->mobile }}</a></li>
                                                            <li><span><i class="fab fa-whatsapp"></i> Whatsapp :</span> <a href="#">{{ $user->whatsapp }}</a></li>
                                                            <li><span><i class="far fa-envelope"></i> Email :</span> <a href="#">{{ $user->email }}</a></li>
                                                            <li><span><i class="fas fa-map-marker-alt"></i> Address :</span> <a href="#">{{ $user->address }}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                                        <ul class="no-list-style">
                                                            <li><a href="https://facebook.com/{{ $user->facebook }}" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="https://twitter.com/{{ $user->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="https://linkedin.com/{{ $user->linkedin }}" target="_blank" ><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="https://instagram.com/{{ $user->instagram }}" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                      
                                                    </div>
													
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                           
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--content end-->
				
				
				
				
				
				
				
            </div>
    @endsection
	
	@section('script')
	
	
	 @endsection
	
   
   