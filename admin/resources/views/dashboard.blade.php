    @extends('layouts.mainlayout')

	 @section('css')
	
	 <link type="text/css" rel="stylesheet" href="{{ asset('css/shop.css') }}">
	 <style>
.styled-table {
    border-collapse: collapse;
   
    
    min-width: 95%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	  margin-left: auto;
  margin-right: auto;
}


.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #c20102;
}

.styled-table tbody tr {
    border-bottom: 1px solid #e8e8e8;
	text-align: left;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #e8e8e8;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #052d12;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}


.styled-table thead tr {
    background-color: #3e3e3e;
    color: #ffffff;
    text-align: left;
}




</style>
    @endsection


	@section('title')
<title>Dashboard</title>
    
	@endsection
	
    @section('content')
       
	   <div class="col-md-9">
                               @if(Auth::User()->role == 'admin')
                                <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>Admin Dashboard</h3>
                                </div>
								
									<div class="tabs-act fl-wrap">
                                        <div class="shop-tabs-menu " id="st-menu">
                                            <ul class="tabs-menu fl-wrap no-list-style">
                                                <li class="current"><a href="#shop-tab1">All Users</a></li>
                                                <li class=""><a href="#shop-tab2">Details</a></li>
                                               
                                            </ul>
                                        </div>
                                        <!-- shop-tabs--> 
                                        <!-- shop-tabs--> 
                                        <div class="shop-tabs fl-wrap block_box">
                                            <!--tabs -->                       
                                            <div class="tabs-container fl-wrap">
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="shop-tab1" class="tab-content  first-tab " style="">
													
																<div class="box-widget-item fl-wrap block_box">
															
																	<div class="box-widget fl-wrap">
																		<div class="box-widget-content">
																			<div class="search-widget">
																				<input name="se" id="myInput" type="text" class="search" placeholder="Search.." value="">
																				   
																			  
																			</div>
																		</div>
																	</div>
																</div>
								
                                                        <div class="shop-tab-container">
                                                            	<div class="block_box fl-wrap"  style="padding: 20px 0 100px 0; border:unset;">
									
																		
								<div style="overflow-x:auto;">	
											<table class="styled-table" id="list">
												<thead>
													<tr>
														<th>S/N</th>
														<th>Name</th>
														
														<th>Down-line No.</th>
														<th>Up-line</th>
														<th>Up-line Details</th>
														
														<th>Bank</th>
														<th>Acc No.</th>
														<th>Acc Name</th>
														<th>Birthday</th>
														<th>Registered</th>
														
													</tr>
												</thead>
												<tbody>
												@php  $i = 1; @endphp
													@foreach($allusers as $userdetails) 
													<tr>
														<td>@php echo $i; @endphp</td>
														<td><a href="{{URL('realtor/'.$userdetails->slug)}}">{{$userdetails->firstname}} {{$userdetails->lastname}}</a></td>
																			
														<td><a href="{{URL('realtor/'.$userdetails->slug)}}">{{$userdetails->ref->count()}}</a></td>
														@if(empty($userdetails->referred))
															<td><a href="#">Nil</a></td>
														@else
															<td><a href="{{URL('realtor/'.$userdetails->slug)}}">{{$userdetails->referred->firstname}} {{$userdetails->referred->lastname}}</a></td>
														@endif
														
														
														@isset($userdetails->referred)<td><a href="{{URL('realtor/'.$userdetails->referred->slug)}}">{{$userdetails->referred->firstname}} {{$userdetails->referred->lastname}} - {{$userdetails->referred->account_number}}, {{$userdetails->referred->bankname}} </td> @else <td> - </td>@endisset
														<td>{{$userdetails->bankname}}</td>
														<td>{{$userdetails->account_name}}</td>
														<td>{{$userdetails->account_number}}</td>
														<td>@if(!empty($userdetails->dob)){{ \Carbon\Carbon::parse($userdetails->dob)->format('F j, Y')}}@endif</td>
														<td>{{ \Carbon\Carbon::parse($userdetails->created_at)->diffForHumans() }}</td>
														
													</tr>
													@php  $i++; @endphp
													@endforeach
													<!-- and so on... -->
												</tbody>
											</table>

									
                                   	</div>
                                </div>
									

                               
					
					
                      
   
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab end-->
                                                <!--tab --> 
                                                <div class="tab">
                                                    <div id="shop-tab2" class="tab-content" style="display: none;">
                                                        <div class="shop-tab-container">
														
																														<div class="box-widget-item fl-wrap block_box">
															
																	<div class="box-widget fl-wrap">
																		<div class="box-widget-content">
																			<div class="search-widget">
																				<input name="se" id="myInput1" type="text" class="search" placeholder="Search.." value="">
																				   
																			  
																			</div>
																		</div>
																	</div>
																</div>

                                                            @foreach ($allusers as $user) 
												<div id="list1">
												<div   class="listing-item" style="height: 253px; width: 100%;">
																<article  class="geodir-category-listing fl-wrap">
																	   <div style="width:25%; " class="listing-avatar" >
																		 <div class="widget-posts-img" style="width:100%;" ><a href=""><img src="{{ $user->image }}" alt="" style="margin: 15px 0 auto 10px; border-radius: 100%; padding: 5px;"></a>  
																		</div>   
																		</div>
																
																
																
																	<div  class="geodir-category-content fl-wrap title-sin_item" style="width: 70%;float: right; ;padding-top: 30px;">
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
																			
																			<div class="geodir-opt-list" style="float: left;">
																				<ul class="no-list-style">
																					
																					Registered: {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
																				</ul>
																			</div>
																		
																		</div>
																	</div>
																</article>
															</div>
														
														
														@endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!--tab end-->
                                                <!--tab --> 
                                            </div>
                                        </div>
                                            <!--tab end-->                                                    
                                 </div>
                                        <!--tabs end-->                                      	
                               
								
								@else
									
								  <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>Dashboard</h3>
                                </div>
								
									@if(count($users) == 0)
									<h3 style="font-size: 35px;font-weight: 600;color: #69789763;">No Users Invited Yet</h3>
									<h4 style="font-size: 30px;font-weight: 600;color: #FF0000;">Yout referral link: {{URL('register/'.Auth::user()->code)}}</h3>
									@else
										<div style="float: left;padding: 10px 10px 0 10px;color: #566985; text-align: left;">
											<h3>Down-line</h3>
											
										</div>
                                
				
			
																					  
											@foreach ($users as $user) 
												<div class="listing-item" style="height: 253px; width: 100%;">
																<article class="geodir-category-listing fl-wrap">
																	   <div style="width:25%; " class="listing-avatar" >
																		 <div class="widget-posts-img" style="width:100%;" ><a href=""><img src="{{ $user->image }}" alt="" style="margin: 15px 0 auto 10px; border-radius: 100%; padding: 5px;"></a>  
																		</div>   
																		</div>
																
																
																
																	<div class="geodir-category-content fl-wrap title-sin_item" style="width: 70%;float: right; ;padding-top: 30px;">
																		<div class="geodir-category-content-title fl-wrap" style="padding: 2px 0 20px;">
																			<div class="geodir-category-content-title-item">
																				<h3 class="title-sin_map"><a href="{{ URL('realtor/'.$user->slug) }}">{{ $user->firstname }} {{ $user->lastname }}</a></h3>
																				<div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{ $user->address }}</a></div>
																			</div>
																		</div>
																		<div class="geodir-category-text fl-wrap" style="padding: 2px 0 20px;">
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
																		<div class="geodir-category-footer fl-wrap">
																			<a class="listing-item-category-wrap">
																				<div class="listing-item-category green-bg"><i class="fal fa-user"></i></div>
																				<span>Realtor</span>
																			</a>
																			<div class="geodir-opt-list">
																				<ul class="no-list-style">
																					
																					{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
																				</ul>
																			</div>
																		
																		</div>
																	</div>
																</article>
															</div>
														
														
														@endforeach
														
														
														
												
												<!-- listing-item-container end -->
										<div style="font-size:13px; float: left;padding: 10px 10px 0 10px;color: #566985; text-align: left; margin-top: 150px;">
											
											<h1>Yout referral link: <span style="color: #FF0000;"> {{URL('register/'.Auth::user()->code)}}</span></h3>
										</div>
						@endif

						
									

                               
								@endif
					
				</div>
					
					
                                
    @endsection
	
	   @section('script')
			<script> 		   var input = document.getElementById("myInput");
				input.addEventListener("input", myFunction);
								
								
								function myFunction(e) {
				  var filter = e.target.value.toUpperCase();

				  var list = document.getElementById("list");
				  var divs = list.getElementsByTagName("tr");
				  for (var i = 0; i < divs.length; i++) {
					var a = divs[i].getElementsByTagName("a")[0];
					
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
   