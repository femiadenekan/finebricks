    @extends('layouts.landinglayout2')
     @section('title')
		<title>Errands - ErrandCity</title>
    @endsection
	
	@section('css')
	
    @endsection
    @section('content')
       
    
<div id="wrapper">
                <!-- content-->
                <div class="content">
                    
                    <section class="gray-bg small-padding no-top-padding-sec" id="sec1" style="min-height: 700px;">
                        <div class="container">
                            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="{{Url('/')}}">Home</a><span>All Realtors</span> 
                            </div>
                            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                            <div class="fl-wrap">
                                <div class="row">
                                    
                                     <div class="col-lg-10" style="float:none;margin:auto;">
                                        <!-- list-main-wrap-header-->
                                        <div class="list-main-wrap-header fl-wrap block_box no-vis-shadow">
                                            <!-- list-main-wrap-title-->
                                            <div class="list-main-wrap-title">
                                                <h2>{{config('app.name')}} Realtors</h2>
                                            </div>
                                            <!-- list-main-wrap-title end-->
                                                         
                                        </div>
										<div class="box-widget-item fl-wrap block_box">
															
																	<div class="box-widget fl-wrap">
																		<div class="box-widget-content">
																			<div class="search-widget">
																				<input name="se" id="myInput1" type="text" class="search" placeholder="Search.." value="">
																				   
																			  
																			</div>
																		</div>
																	</div>
																</div>
                                        <!-- list-main-wrap-header end-->                            
                                        <!-- listing-item-container -->
                                      
                                         @if(!empty($users)) 
											<div id="list1">
										
										@foreach ($users as $user) 
												
												<div class="listing-item" style="height: 253px; width: 100%;">
																<article class="geodir-category-listing fl-wrap">
																	   <div style="width:25%; " class="listing-avatar" >
																		 <div class="widget-posts-img" style="width:100%;" ><a href=""><img src="{{ asset($user->image) }}" alt="" style="margin: 15px 0 auto 10px; border-radius: 100%; padding: 5px;"></a>  
																		</div>   
																		</div>
																
																
																
																	<div class="geodir-category-content fl-wrap title-sin_item" style="width: 70%;float: right; ;padding-top: 30px;">
																		<div class="geodir-category-content-title fl-wrap" style="padding: 2px 0 20px;">
																			<div class="geodir-category-content-title-item">
																				<h3 class="title-sin_map"><a href="{{ URL('realtor/'.$user->slug) }}">{{ $user->firstname }} {{ $user->lastname }}</a></h3>
																				<div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{ $user->address }}</a></div>
																			</div>
																		</div>
																			@isset($user->referred)
																		<div class="geodir-category-text fl-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">Up-line.</p>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fal fa-user"></i>{{$user->referred->firstname}} {{$user->referred->lastname}} </div>
																			</div>
																		</div>
																		@endisset
																		
																		
																		<div class="geodir-category-text realtor-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">About.</p>
																			
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fal fa-phone"></i> Mobile: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $user->mobile }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="fab fa-whatsapp"></i> Whatsapp: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $user->mobile }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"><i class="far fa-envelope"></i> Email: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Mobile">{{ $user->email }}</li>
																				</ul>
																			</div>
																		</div>				
																		
																		
																		<div class="geodir-category-text realtor-wrap" style="padding: 2px 0 20px;">
																			<p class="small-text">Account Details</p>
																			
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title">Account Name: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Account Name">{{ $user->account_name}}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"> Bank Name: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Bank">{{ $user->bankname }}</li>
																				</ul>
																			</div>
																			<div class="facilities-list fl-wrap">
																				<div class="facilities-list-title"> Account Number: </div>
																				<ul class="no-list-style">
																					<li class="tolt" data-microtip-position="top" data-tooltip="Number">{{ $user->account_number }}</li>
																				</ul>
																			</div>
																		</div>
																		<div class="geodir-category-footer fl-wrap">
																			<a class="listing-item-category-wrap">
																				<div class="listing-item-category green-bg"><i class="fal fa-user"></i></div>
																				<span>Realtor</span>
																			</a>
																			<div class="geodir-opt-list">
																				<ul class="no-list-style">
																					
																					Joined: {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
																				</ul>
																			</div>
																		
																		</div>
																	</div>
																</article>
															</div>
														
														@endforeach
											@else
											
											<h3 style="font-size: 35px;font-weight: 600;color: #69789763;">No Users Invited Yet by {{$userscode->firstname}}</h3>

											@endif												
													
                                            	</div>

											
                                                                                                                          
                                           {{ $users->links('pagination::default') }}
                                       
                                        <!-- listing-item-container end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>


	@endsection
	
	
		   @section('script')
		
				<script> 		   var input1 = document.getElementById("myInput1");
				input1.addEventListener("input", myFunction);
								
								
								function myFunction(e) {
				  var filter = e.target.value.toUpperCase();

				  var list = document.getElementById("list1");
				  var divs = list1.getElementsByTagName("article");
				  for (var i = 0; i < divs.length; i++) {
					var a = divs[i].getElementsByTagName("h3")[0];
					
					if (a) {
					  if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
						divs[i].style.display = "";
					  } else {
						divs[i].style.display = "none";
					  }
					}       
				  }

				}
				
				</script>
	     @endsection
	
	
   
   