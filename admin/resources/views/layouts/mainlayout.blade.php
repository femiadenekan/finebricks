<!DOCTYPE html>

<html lang="en">


<head>

@include('layouts.partials.head')

</head>


<body>
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
		
		
		<div id="main">
		 <header class="main-header dsh-header">

		  @include('layouts.partials.landingnav')
		  </header>

		  <div id="wrapper">
						<!-- content-->
						 <div class="content">
							

							@include('layouts.partials.subnav')
						
							
							
							<section class="gray-bg main-dashboard-sec" id="sec1">
									<div class="container">
									
									@include('layouts.partials.sidenav')
									@yield('content')
									
									</div>
									<div id="chat-overlay" class="row"></div>
 
										<audio id="chat-alert-sound" style="display: none">
											<source src="{{ asset('sound/facebook_chat.mp3') }}" />
										</audio>
							</section>

						


							  <!-- content-wrapper ends -->

						   <div class="limit-box fl-wrap"></div>

						</div>

			<!-- main-panel ends -->

		  </div>

		  <!-- page-body-wrapper ends -->
		@include('layouts.partials.footerdash')
		</div>
		
		
		
		

<!-- container-scroller -->

@include('layouts.partials.footer-scripts')

</body>

</html>