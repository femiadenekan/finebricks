@extends('layouts.landinglayout2')
    @section('css')
	
    @endsection
    @section('content')
	
			
			
			<div id="wrapper" style="">
                <!-- content-->
                <div class="content">
                  
                    <section style="height: 100vh; ">
                        <div class="container">
						
                            <div class="section-title">
							
                                <h2>Verify Email</h2>
                                <div class="section-subtitle"></div>
                                <span class="section-separator"></span>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                             <i class="fal fa-check-circle decsth"></i>
							 <h4 style="color: #c40101;font-size: 18px;font-weight: 600;">{{ __('A fresh verification link has been sent to your email address.') }}</h4>
                        </div>
						
                                                                
                    @endif
								 <p style="font-weight: 600;">{{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}</p>
                            </div>
							<div class="container" style="width:100%;right: 0;bottom: 0;position: relative;margin-top: 30px;">
                          
							 <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn color2-bg">{{ __('Click here to request another') }}<i class="fas fa-caret-right"></i></button>.
                    </form>
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
