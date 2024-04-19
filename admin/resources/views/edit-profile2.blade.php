    @extends('layouts.mainlayout')

	
	
    @section('content')
     <div class="col-md-9">
														@if ($errors->any())
															<div class="alert alert-danger">
																<ul>
																	@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
																	@endforeach
																</ul>
															</div>
															<br /> 
															@endif	
							<form method="post"  name="editprofile" action="{{ route('profile.update') }}" enctype="multipart/form-data">
								@csrf
                                <div class="dashboard-title fl-wrap">
                                    <h3>Personal Information</h3>
                                </div>
								
																					
                                <!-- profile-edit-container--> 
								
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
											<label>Change Avatar</label> 
											<div class="add-list-media-wrap fuzone" style="background: #dfdfdd;">
												<div class="fu-text">
												<span><i class="fal fa-image"></i> <strong>Add Photos</strong></span>
												</div>
												<input type="file" class="upload" name="profile_image">
											</div>
										
										
                                            <div class="col-sm-6">
                                                <label>First Name <i class="fal fa-user"></i></label>
                                                 <input required type="text" placeholder="{{Auth::user()->firstname}}" name="firstname" value="{{Auth::user()->firstname}}"/>                                                  
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Last Name <i class="fal fa-user"></i></label>
                                                <input required type="text" placeholder="{{Auth::user()->lastname}}" name="lastname" value="{{Auth::user()->lastname}}"/> 
                                            </div>
											
											<div class="col-sm-6">
                                                <label>Phone<i class="far fa-phone"></i>  </label>
                                                <input type="number" maxlength="11" placeholder="{{Auth::user()->mobile}}" name="mobile" value="{{Auth::user()->mobile}}"/>
                                            </div>
											
											<div class="col-sm-6">
                                                <label>Whatsapp<i class="far fa-phone"></i>  </label>
                                                <input type="number" maxlength="11" placeholder="{{Auth::user()->whatsapp}}" name="whatsapp" value="{{Auth::user()->whatsapp}}"/>
                                            </div>
											
                                            <div class="col-sm-6">
                                                <label>Email Address<i class="far fa-envelope"></i>  </label>
                                                <input type="email" placeholder="{{Auth::user()->email}}" value="" disabled />                                                  
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <label> location <i class="fas fa-map-marker"></i>  </label>
                                                <input type="text" placeholder="{{Auth::user()->location}}" value="{{Auth::user()->location}}" name="location">                                                
                                            </div>
											
                                            <div class="col-sm-6">
                                                <label> Address <i class="fas fa-map-marker"></i>  </label>
                                                <input type="text" placeholder="{{Auth::user()->address}}" value="{{Auth::user()->address}}" name="address">                                                
                                            </div>
											
                                            <div class="col-sm-6">
                                                <label> Birthday <i class="fas fa-calendar-alt"></i>  </label>
                                                <input type="date" placeholder="{{Auth::user()->dob}}" value="{{Auth::user()->dob}}" name="dob">                                                
                                            </div>
                                            
                                        </div>
                                        <label> About Me</label>                                              
                                        <textarea cols="40" rows="3" placeholder="{{Auth::user()->about}}" name="about" value="{{Auth::user()->about}} style="margin-bottom:20px;"></textarea>
                                        
                                   
                                
                                <!-- profile-edit-container end--> 
                                
								
								<div class="dashboard-title fl-wrap">
                                    <h3>Your Bank Details</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Bank Name <i class="fal fa-user"></i></label>
                                                <input type="text" placeholder="{{Auth::user()->bankname}}" value="{{Auth::user()->bankname}}" name="bankname">                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Account Name <i class="fal fa-user"></i></label>
                                                <input type="text" placeholder="{{Auth::user()->account_name}}" value="{{Auth::user()->account_name}}" name="account_name">                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Account Number<i class="far fa-envelope"></i>  </label>
                                                <input type="text" placeholder="{{Auth::user()->account_number}}" value="{{Auth::user()->account_number}}" name="account_number">                                                
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- profile-edit-container end--> 
                                <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>Your  Socials</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <label>Facebook <i class="fab fa-facebook"></i></label>
                                        <input type="text" placeholder="{{Auth::user()->facebook}}" value="{{Auth::user()->facebook}}" name="facebook">
                                        <label>Twitter<i class="fab fa-twitter"></i>  </label>
                                        <input type="text" placeholder="{{Auth::user()->twitter}}" value="{{Auth::user()->twitter}}" name="twitter">
                                        <label>Linkedin<i class="fab fa-linkedin"></i>  </label>
                                        <input type="text" placeholder="{{Auth::user()->linkedin}}" value="{{Auth::user()->linkedin}}" name="linkedin">
                                        <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                        <input type="text" placeholder="{{Auth::user()->instagram}}" value="{{Auth::user()->instagram}}" name="instagram">
                                        <button class="btn    color2-bg  float-btn">Save Changes<i class="fal fa-save"></i></button>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->                                    
                            </div>
                        </div>
						</form>
                      </div>
	@endsection
	
	@section('script')

	 @endsection
	 
	 
	 
	 
	
   