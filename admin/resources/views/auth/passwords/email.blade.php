@extends('layouts.landinglayout')
  
    @section('content')
	
  <div id="wrapper" style="padding-top: unset;">
                <!-- content-->
                <div class="content">
                  
                    <section style="height: 100vh; ">
                        <div class="container">
                            <div class="section-title" style="padding-bottom: unset;">
							
                                <h2>Reset Password</h2>
                                <div class="section-subtitle"></div>
                                <span class="section-separator"></span>
                               
                            </div>
							 <div  class="col-lg-8" style="float:none;margin:auto;">
							 <div class="block_box fl-wrap" >
                                            <!--   list-single-main-item -->
                                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                                <div class="profile-edit-container">
                                                    <div class="custom-form">
													@if (session('status'))
															<div class="alert alert-success" role="alert">
																 <h4 style="color: #c40101;font-size: 18px;font-weight: 600;">{{ session('status') }}</h4>
															</div>
														@endif
                                                     <form method="POST" action="{{ route('password.email') }}">
													  @csrf
													  
                                                            <fieldset class="fl-wrap">
                                                              
                                                                <div class="row">
																 <div class="col-sm-12">
                                                                        <label class="vis-label">{{ __('E-Mail Address') }} <i class="far fa-user"></i></label>
																		<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
																	  @error('email')
																			<span class="invalid-feedback" role="alert">
																				 <h4 style="color: #c40101;font-size: 18px;font-weight: 600;">{{ $message }}</h4>
																			</span>
																		@enderror
																	  </div>
                                                                   
                                                                   
                                                                </div>
                                                                <span class="fw-separator"></span>
                                                                <div class="clearfix"></div>
                                                              <button type="submit" class="btn color2-bg">  {{ __('Send Password Reset Link') }}</button>
                                                            </fieldset>
                                                          
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--   list-single-main-item end -->
                                        </div>
                                        </div>

                            
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                  
            <!--map-modal -->
           
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>     
        </div>
        </div>
@endsection
