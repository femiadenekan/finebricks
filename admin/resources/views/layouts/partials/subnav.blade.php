@auth
<section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            
                            <!--Tariff Plan menu-->
                            
                                <div class="dashboard-header_conatiner fl-wrap dashboard-header_title welcomeshift" style="width: 100%;">
                                 <h1>Welcome, <span> {{ Auth::user()->firstname }}       </span></h1>
                            </div>
							<div class="dashboard-header_conatiner fl-wrap dashboard-header_title" style="width: 50%;">
                               
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="dashboard-header fl-wrap">
                            <div class="container">
                                <div class="dashboard-header_conatiner fl-wrap">
                                    <div class="dashboard-header-avatar">
                                        <img src="{{ URL(asset(Auth::user()->image)) }}" alt="">
                                        <a href="edit-profile" class="color-bg edit-prof_btn"><i class="fal fa-edit"></i></a>
                                    </div>
                                    <div class="dashboard-header-stats-wrap">
                                        <div class="dashboard-header-stats">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-map-marked"></i>
                                                           Down-line
                                                            <span>{{$count}} </span>
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!--  dashboard-header-stats  end -->
                                        <div class="dhs-controls">
                                            <div class="dhs dhs-prev"><i class="fal fa-angle-left"></i></div>
                                            <div class="dhs dhs-next"><i class="fal fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                    <!--  dashboard-header-stats-wrap end -->
                                      
									  <a class="add_new-dashboard" href="/edit-profile">Update Profile<i class="fal fa-layer-plus"></i></a>
									  <a class="add_new-dashboard" href="{{URL('/down-line/'.Auth::user()->slug)}}">Browse Down-line<i class="fal fa-layer-plus"></i></a>
                                  
                                </div>
                            </div>
                        </div>

                    </section>
@endauth
