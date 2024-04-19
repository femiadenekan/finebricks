<div class="main-login-wrap login" data-modal-id="log" id="log">
                <div class="log-overlay"></div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap  modal_main">
                        <div class="main-register_title"><span><a style="line-height: 1px;" href="/" class="logo-holder"><img src="{{ asset('images/logo.png')}}" alt=""></a></span></div>
                        <div class="close-log"><i class="fal fa-times"></i></div>
                        <div class="tabs-menu fl-wrap no-list-style">
                            <div style="text-align: left;position: relative;z-index: 2;border-bottom: 3px solid ;width: 100%; border-color: #978c9f;padding-bottom: 10px;"><a style="color: #7d93b2;font-size: 18px;font-weight: 600;padding: 14px 0;"><i class="fal fa-sign-in-alt"></i> Login</a></div>
                            
                        </div>
                        <!--tabs -->                       
                        <div class="tabs-container">

                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform" action="{{ route('login') }}">
										@csrf
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											
											
                                            <label >Password <span>*</span> </label>
                                            <input id="password" type="password"   onClick="this.select()" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
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
										
										
										@if (Route::has('password.request'))
											
                                        <div class="lost_password">
                                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
											
                                        </div>
										@endif
										 
                                    </div>
                                </div>
                                <!--tab end -->
                           
                            <!--tabs end -->
                            
                       
						</div>
					</div>
            </div>
  </div>
            <!--register form end -->
