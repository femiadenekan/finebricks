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
                             
                                <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>Update Upline - {{ $user->firstname }} {{ $user->lastname }}</h3>
                                </div>
								
									
									<div class="tabs-act fl-wrap">
                                       
                                        <!-- shop-tabs--> 
                                        <!-- shop-tabs--> 
                                        <div class="shop-tabs fl-wrap block_box">
                                            <!--tabs -->                       
                                            <div class="tabs-container fl-wrap">
                                                <!--tab -->
                                                <div class="tab">
													
															 <div class="list-single-main-item-title fl-wrap">
                                                                    <h3>Current Upline</h3>
                                                                </div>
                                                        <div class="shop-tab-container">
                                                            	<div class="block_box fl-wrap"  style="padding: 5px 0 0 0; border:unset;">
									<div   class="listing-item" style="width: 100%;">
																<article  class="geodir-category-listing fl-wrap">
																	<div  class="geodir-category-content fl-wrap title-sin_item" style="padding: 20px;">
																		<div class="geodir-category-content-title fl-wrap">
																			<div class="geodir-category-content-title-item">
																				<h3 class="title-sin_map"><a href="{{ URL('realtor/'.$user->slug) }}">{{ $user->firstname }} {{ $user->lastname }}</a></h3>
																				<div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{ $user->address }}</a></div>
																			</div>
																		</div>
																		
																		@isset($user->referred)
																		<div class="geodir-category-text fl-wrap" style="padding: 2px 0 2px 30px;">
																			<p class="small-text">Current Up-line.</p>
																			<div class="facilities-list-title"><i class="fal fa-user"></i>{{$user->referred->firstname}} {{$user->referred->lastname}} </div>
																			
																		</div>
																		@else
																			
																		<div class="geodir-category-text fl-wrap" style="padding: 2px 0 2px 20px;">
																			<p class="small-text">{{ $user->firstname }} {{ $user->lastname }} has no Upline.</p>
																			
																		</div>
																		@endisset
																		
																		
																	</div>
																</article>
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


								<div class="bookiing-form-wrap block_box fl-wrap">
                                            <!--   list-single-main-item -->
                                            <div class="list-single-main-item fl-wrap tr-sec" style="margin-bottom: 200px;">
                                                <div class="profile-edit-container">
                                                    <div class="custom-form">
                                                        <form method="post"  name="updateupline" action="{{ route('upline.update') }}" enctype="multipart/form-data">
                                                            @csrf
															<fieldset class="fl-wrap">
                                                                <div class="list-single-main-item-title fl-wrap">
                                                                    <h3>Change Upline</h3>
                                                                </div>
                                                                <div class="row">
																 <div class="col-sm-12">
                                                                        <label class="vis-label">Select Realtors </label>
                                                                        <div class="listsearch-input-item ">
                                                                            <select data-placeholder="Select Realtors" class="chosen-select" name="newref">
                                                                               
																			   <option>Select Realtors</option>
																			   
																			   @foreach($allusers as $use)
																				
																				<option value="{{ $use->code }}">{{ $use->firstname }} {{ $use->lastname }}</option>
                                                                             
																				@endforeach
                                                                            </select>
                                                                        </div>
																		<input id="ms1" type="text" name="userid" style="display:none" value="{{ $user->id }}">
                                                                    </div>
                                                                 <span class="fw-separator"></span>   
                                                                <button type="submit"  class="btn color2-bg" style="float:right; margin-top:0;"> Update <i class="fas fa-caret-right"></i></button>
                                                            </fieldset>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--   list-single-main-item end -->
                                        </div>
               
					
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
   