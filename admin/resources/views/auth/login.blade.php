    @extends('layouts.landinglayout')

    @section('content')
       
          <!--login-column  -->
            <div class="login-column" style='background-image: url("images/bg/hero/bgg.jpg");'>
                <div class="login-column_header">
                    <a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="Go Home" /></a>
                    <div class="clearfix"></div>
				
																@error('name')
												<div class="block_box fl-wrap">
															<fieldset class="fl-wrap">
                                                                <div class="list-single-main-item-title fl-wrap">
                                                                    <h3>unConfirmation</h3>
                                                                </div>
                                                                <div class="success-table-container">
                                                                    <div class="success-table-header fl-wrap">
                                                                        <i class="fal fa-check-circle decsth"></i>
                                                                        <h4>{{ $message }}</h4>
                                                                        <div class="clearfix"></div>
                                                                        <p>Please check.</p>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <span class="fw-separator"></span>
                                                                
                                                            </fieldset>
															</div>
															@enderror
                   											
                </div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap">
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li style="padding-top: 30px;"><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->                       
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform" action="{{ route('login') }}">
										@csrf
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input id="email" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											
											
                                            <label >Password <span>*</span> </label>
                                            <input id="password" type="password"   onClick="this.select()" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											
											
                                            <button type="submit"  class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                            <div class="clearfix"></div>
                                            
											
											<div class="filter-tags">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
											
                                          
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        
                                        <div class="custom-form">
                                          <form method="post"   name="registerform" class="main-register-form" id="main-register-form2" action="{{ route('register') }}">
											 @csrf
											 
                                                <label for="firstname">Firstname <span>*</span> </label>
                                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus  onClick="this.select()">
                                                @error('nafirstnameme')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												
												<label for="lastname">Lastname <span>*</span> </label>
                                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus  onClick="this.select()">
                                                @error('lastname')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												
												<label for="address">Address <span>*</span> </label>
                                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus  onClick="this.select()">
                                                @error('address')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												
												
												<label for="whatsapp">Whatsapp<span>*</span></label>
                                                <input id="whatsapp" type="tel" maxlength="11" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp"  onClick="this.select()">
                                                 @error('whatsapp')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													
													
												<label for="mobile">Mobile<span>*</span></label>
                                                <input id="mobile" type="tel" maxlength="11" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile"  onClick="this.select()">
                                                 @error('mobile')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													
													
													<label for="email">Email Address <span>*</span></label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  onClick="this.select()">
                                                 @error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												
												
												
												<label for="password">Password <span>*</span></label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  onClick="this.select()">
                                                
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												
												
												<label for="password-confirm">Password <span>*</span></label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  onClick="this.select()">
                                                
												
												
												
												<label for="location">Location <span>*</span> </label>
                                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" autocomplete="location"  required  autofocus  onClick="this.select()">
                                                @error('location')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												
												
												<label for="account_number">Bank Account Number <span>*</span> </label>
                                                <input id="account_number" type="number" maxlength="10" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ old('account_number') }}" required autocomplete="account_number" autofocus  onClick="this.select()"     oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                                @error('account_number')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
															
								
												
												<label for="account_name">Bank Account Name <span>*</span> </label>
                                                <input id="account_name" type="text" class="form-control @error('account_name') is-invalid @enderror" name="account_name" value="{{ old('account_name') }}" required autocomplete="account_name" autofocus  onClick="this.select()">
                                                @error('account_name')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
															
								
												
												<label for="bank">Bank <span>*</span> </label>
                                                <input id="bank" type="text" class="form-control @error('bank') is-invalid @enderror" name="bank" value="{{ old('bank') }}" required autocomplete="bank" autofocus  onClick="this.select()">
                                                @error('bank')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
															
								
												
												<label for="code">Referal Code </label>
                                               <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"  name="code"  autocomplete="code" autofocus  onClick="this.select()"  value="{{ isset($refcode) ? $refcode : '' }}" placeholder="{{ isset($refcode) ? $refcode : '' }}"   >
                                                @error('code')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												
												
												<div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a" type="checkbox" name="check">
                                                    <label for="check-a">I agree to the <a href="#">Terms and Conditions</a></label>
                                                </div>
												
												
												
                                                <div class="clearfix"></div>
                                                <button type="submit" class="btn float-btn color2-bg" style="float:none"> Register  <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                             
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--login-column end-->   <!-- wrapper-->
    
	
	

    @endsection
	
	
   
   