    @extends('layouts.mainlayout')
 
	
	
    @section('content')
       
	    <div class="col-md-8">
										   <div class="dashboard-title dt-inbox fl-wrap">
													<h3>Edit Profile</h3>
												</div>
                                       
                                        <div class="bookiing-form-wrap block_box fl-wrap" style="margin-bottom:40px; padding: unset;">
                                            <!--   list-single-main-item -->
                                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                                <div class="profile-edit-container">
                                                    <div class="custom-form">
                                                        
														
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
                                                            <fieldset class="fl-wrap">
                                                                <div class="list-single-main-item-title fl-wrap">
                                                                    <h3>Your personal Information</h3>
                                                                </div>
																 <div class="row">
																	 <div class="add-list-media-wrap fuzone" style="background: #dfdfdd;">
																		
																			<div class="fu-text">
																				<span><i class="fal fa-image"></i> Click here or drop files to upload profile image</span>
																			</div>
																			<input type="file" class="upload" name="profile_image">
																		
																	</div>
																</div>
																
																
                                                                <div class="row">
                                                                    <div class="col-sm-12">
																	
                                                                        <label class="vis-label">Username<i class="far fa-user"></i></label>
                                                                        <input disabled type="text" placeholder="{{Auth::user()->username}}" value=""/>                                                  
                                                                    </div>
																	
																	<div class="col-sm-12">
                                                                        <label class="vis-label">First Name <i class="far fa-user"></i></label>
                                                                        <input required type="text" placeholder="{{Auth::user()->firstname}}" name="firstname" value="{{Auth::user()->firstname}}"/>                                                  
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <label class="vis-label">Last Name <i class="far fa-user"></i></label>
                                                                        <input required type="text" placeholder="{{Auth::user()->lastname}}" name="lastname" value="{{Auth::user()->lastname}}"/> 
                                                                    </div>
                                                                    
                                                                    <div class="col-sm-12">
                                                                        <label class="vis-label">Mobile<i class="far fa-phone"></i>  </label>
                                                                        <input type="number" maxlength="11" placeholder="{{Auth::user()->mobile}}" name="mobile" value="{{Auth::user()->mobile}}"/>
                                                                    </div>
																	
															
																	
																	
																	<div class="col-sm-12">
                                                                        <label class="vis-label">Email Address<i class="far fa-envelope"></i>  </label>
                                                                        <input type="text" placeholder="{{Auth::user()->email}}" value="" disabled />                                                  
                                                                    </div>
																	
																	
																	<div class="col-sm-12">
                                                                        <label class="vis-label">About<i class="far fa-user"></i></label>
                                                                        <input required type="text" placeholder="{{Auth::user()->about}}" name="about" value="{{Auth::user()->about}}"/> 
                                                                    </div>
																	
																	
																	
																	 
                                                                </div>
																
										
																 
                                                                <span class="fw-separator"></span>
                                                                
                                                              
																<button type="submit"  class="btn color2-bg" style="float:right; margin-top:0;"> Submit <i class="fas fa-caret-right"></i></button>
																<a  href="profile"  class="previous-form action-button color2-bg">Cancel</a>
																<div class="clearfix"></div>
                                                            </fieldset>
                                                            
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
    @endsection
	
	@section('script')

	 @endsection
	
   