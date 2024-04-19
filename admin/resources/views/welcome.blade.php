    @extends('layouts.landinglayout')

	
	
    @section('content')
       
 <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true" style="height: 100vh;">
                        <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <!--ms-container-->
                                <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }" >
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--ms_item-->
                                            <div class="swiper-slide">
                                                <div class="ms-item_fs fl-wrap full-height">
                                                    <div class="bg" data-bg="images/user_bg.jpg"></div>
                                                    <div class="overlay op7"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                            <!--ms_item-->
                                            <div class="swiper-slide ">
                                                <div class="ms-item_fs fl-wrap full-height">
                                                    <div class="bg" data-bg="images/1.png"></div>
                                                    <div class="overlay op7"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--ms-container end-->
                            </div>
                        </div>
                      <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                    <h1>Welcome to {{config('app.name')}} Portal</h1>
                                
                                <h3>Join us today and start your journey to becoming a partner</h3>
                            </div>
                          </div>
                  <div class="container">
                             @guest
							<a href="{{URL('/register')}}" class="promo-link big_prom"><i class="fal fa-user"></i><span>Register</span></a>
							<a href="{{URL('/login')}}" class="promo-link big_prom"><i class="fa fa-user"></i><span>Login</span></a>
							@else
								<a href="{{URL('/dashboard')}}" class="promo-link big_prom"><i class="fal fa-user"></i><span>Back to Dashboard</span></a>
                             @endguest
							
                        </div>
                   
                    </section>
                    <!--section end-->
					
					
               
                     
                 
                   
					
			</div>
                <!--content end-->
				
            </div>
          
            <!-- wrapper end-->
			
    @endsection

	   