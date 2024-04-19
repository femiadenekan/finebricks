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
                                    <h3>Update Up/Down-line</h3>
                                </div>
								
									<div class="tabs-act fl-wrap">
                                       
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
														<th>Realtor</th>
														
														<th>Up-line</th>
														
														<th>Registered</th>
														<th>Action</th>
														
													</tr>
												</thead>
												<tbody>
												@php  $i = 1; @endphp
													@foreach($allusers as $userdetails) 
													<tr>
														<td>@php echo $i; @endphp</td>
														<td><a href="{{URL('realtor/'.$userdetails->slug)}}">{{$userdetails->firstname}} {{$userdetails->lastname}}</a></td>
														@if(empty($userdetails->referred))
															<td><a href="#">Nil</a></td>
														@else
															<td><a href="{{URL('realtor/'.$userdetails->slug)}}">{{$userdetails->referred->firstname}} {{$userdetails->referred->lastname}}</a></td>
														@endif
														
														
														<td>{{ \Carbon\Carbon::parse($userdetails->created_at)->diffForHumans() }}</td>
														<td><button class="btn color2-bg"><a href="{{URL('uplineupdate/'.$userdetails->id) }}" style="color: unset;">Update Upline</a></button></td>
														
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
                                            </div>
                                        </div>
                                            <!--tab end-->                                                    
                                 </div>
                                        <!--tabs end-->                                      	
               
					
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
   