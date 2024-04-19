
                <!-- logo-->
                <a href="/" class="logo-holder"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                <!-- logo end-->
                <!-- header-search_btn-->         
                <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
                <!-- header-search_btn end-->
                <!-- header opt --> 
               
               <a href="{{ url('boards') }}" class="add-list color-bg">Browse Boards<span><i class="fa fa-plus-circle fa-lg"></i></span></a> 
			  
                <!-- header opt end--> 
                <div class="header-user-menu">
                    <div class="header-user-name">
                        <span><img src="{{ asset(Auth::user()->imagee) }}" alt=""></span>
                    {{ Auth::user()->firstname }}
                   
				   <ul>
                        <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('profile') }}">profile</a></li>
                        
                        <li><a href="{{ url('reviews') }}"> Cart </a></li>
                        <li><a href="{{ url('reviews') }}"> Quotes </a></li>
                       
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a></li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                         </form>	
                    </ul>
                </div>
                </div>
                
                               
               <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="far fa-shopping-cart"></i><span class="cart-counter green-bg"></span> </div>


			   <!-- header opt end--> 
                <!-- lang-wrap-->

                <!-- lang-wrap end-->                                 
               
                <!--  navigation --> 
                <div class="nav-holder main-menu">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a class="custom-scroll-link" href="{{ url('/allboards')}}">Boards</a>
                                <a class="custom-scroll-link" href="{{ url('/#how')}}">How It Works</a>
                                
                            </li>
                        
                           
                          
							
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->  <!-- nav-button-wrap--> 

               
              <!-- header-search_container -->                     
                <div class="header-search_container header-search vis-search">
                    <div class="container small-container">
                        <div class="header-search-input-wrap fl-wrap">
                            <!-- header-search-input --> 
							
							<form id="" name="searchboards" action="/boardsearch" method="POST">
                           @csrf
                            <!-- header-search-input end -->  
                            	<div class="header-search-input header-search_selectinpt ">
                                <select data-placeholder="Category" class="chosen-select no-radius" name="format">
                                    <option>All Formats</option>
                                 	@foreach ($formats as $format)
								 <option value="{{ $format->media_type }}">{{ $format->media_type }}</option>
                                   @endforeach
                                									
                                </select>
                            </div>
							<!-- header-search-input --> 
                            <div class="header-search-input location autocomplete-container">
                                <label><i class="fal fa-map-marker"></i></label>
                                <input required type="text" placeholder="Location..." id="autocomplete" value="" autocomplete="off" name="location" onFocus="geolocate()"/>
                                <a href="#"><i class="fal fa-dot-circle"></i></a>
								<input hidden type="text" id="administrative_area_level_1" name="administrative_area_level_1" placeholder="State" />                                                  
                                  <input type="text" hidden id="longitude" name="longitude" />                                                 
                                 <input type="text" hidden id="latitude" name="latitude"/>                                                 
                            </div>
                            <!-- header-search-input end -->                                        
                            <!-- header-search-input --> 
							<div class="header-search-input">
                                <select data-placeholder="Category" class="chosen-select no-radius" name="radius">
                                    <option value="10000">Any Distance</option>
                                 	
                                		<option value="1">1Km Radius</option>							
                                		<option value="2">2Km Radius</option>							
                                		<option value="3">3Km Radius</option>							
                                		<option value="4">4Km Radius</option>							
                                		<option value="5">5Km Radius</option>							
                                		<option value="6">Km Radius</option>							
                                		<option value="7">7Km Radius</option>							
                                		<option value="8">8Km Radius</option>							
                                		<option value="9">9Km Radius</option>							
                                		<option value="1000">1000Km Radius</option>							
                                </select>
                            </div>
							
                            
							
						
                            <!-- header-search-input end --> 
                            <button class="header-search-button green-bg" ><i class="far fa-search"></i> Search Errand</button>
							</form>
                        
						
						</div>
                        <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
                    </div>
                </div>
                <!-- wishlist-wrap--> 
                
         @include('layouts.partials.wish')
            <!-- header end-->
