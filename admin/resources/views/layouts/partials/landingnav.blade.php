            <header class="main-header">
                <!-- logo-->
                <a href="{{ url('/') }}" class="logo-holder"><img src="{{ asset('images/logo.png')}}" alt="{{config('app.name')}}"></a>
                <!-- logo end-->
                <!-- header-search_btn-->         
                <!-- header-search_btn end-->
                <!-- header opt --> 
               
				  
 <!-- Authentication Links -->
            @guest			
                 <a href="#" id="tt" class="add-list color-bg modal-open tt ">Register @if(session('login')) open @endif</a>			
			@if (Route::has('login'))          <div class="show-reg-form modal-open tt" data-srcav="{{ asset('images/avatar/3.jpg')}}">Sign In</div>   @endif
				
                
               
			 @else
				<a href="{{ url('https://finebricks.com.ng/properties/') }}" class="add-list color-bg">Properties<span></span></a> 
			  <div class="header-user-menu">
                    <div class="header-user-name">
                        <i class="fas fa-user"></i>
                    
                    </div>
					
                    <ul>
                        
                        <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/realtor/'.Auth::User()->slug) }}">Public Profile</a></li>
                        <li><a href="{{ url('/edit-profile') }}">Update Profile</a></li>
                        
                         
                        
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a></li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                         </form>							 
                    </ul>
                </div>
			@endguest
         <!-- lang-wrap-->

                <!-- lang-wrap end-->                                 
               
                <!--  navigation --> 
                <div class="nav-holder main-menu">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a class="custom-scroll-link" href="{{ url('https://finebricks.com.ng/')}}">Home</a>
                               
                                <a class="custom-scroll-link" href="{{ url('https://finebricks.com.ng/about')}}">About Us</a>
                                <a class="custom-scroll-link" href="{{ url('https://finebricks.com.ng/contact')}}">Contact</a>
                                <a class="custom-scroll-link" href="{{ url('https://finebricks.com.ng/site-inspection/')}}">Site Inspection</a>
                               

                            </li>
                        
                           
                          
							
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
				 <!-- nav-button-wrap--> 
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
              
 @if(session('login')) open @endif
            </header>
            <!-- header end-->