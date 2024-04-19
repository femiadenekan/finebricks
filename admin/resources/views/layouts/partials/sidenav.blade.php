@auth
                            <!--  dashboard-menu-->
                            <div class="col-md-3">
                                <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars" style="color: #fff;font-size: 16px;"></i>Menu</div>
                                <div class="clearfix"></div>
                                <div class="fixed-bar fl-wrap" id="dash_menu">
                                    <div class="user-profile-menu-wrap fl-wrap block_box">
                                        <!-- user-profile-menu-->
                                        <div class="user-profile-menu">
                                            <h3>Main</h3>
                                            <ul class="no-list-style">
                                               <li><a href="{{URL('dashboard')}}" class="{{ Request::is('dashboard') ? 'user-profile-act' : '' }}"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                                                <li><a href="{{URL('edit-profile')}}" class="{{ Request::is('profile') ? 'user-profile-act' : '' }}"><i class="fal fa-rss"></i>My Profile</a></li>
                                                @if(Auth::User()->role == 'admin')
												<li><a href="{{URL('realtors')}}" class="{{ Request::is('realtors') ? 'user-profile-act' : '' }}"><i class="fal fa-rss"></i>View All Users</a></li>
												<li><a href="{{URL('up-down-line')}}" class="{{ Request::is('up-down-line') ? 'user-profile-act' : '' }}"><i class="fal fa-rss"></i>Update Upline</a></li>
												@endif
												
                                                 
                                              
                                            </ul>
                                        </div>
                                        <!-- user-profile-menu end-->
                                       <button class="logout_btn color2-bg"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); " style="color: unset;">Log Out</a><i class="fas fa-sign-out"></i></button>                                      
                                    </div>                                    
									
									
									
                                </div>
                             </div>
                            <!-- dashboard-menu  end-->
@endauth
						