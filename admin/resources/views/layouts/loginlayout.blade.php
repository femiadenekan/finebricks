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
		

		 
		  

		 
						<!-- content-->
						 
							

							
									@yield('content')
									
							
							

						

							  

							  <!-- content-wrapper ends -->

						   <div class="limit-box fl-wrap"></div>

						

			<!-- main-panel ends -->

		  

		  <!-- page-body-wrapper ends -->

	
		</div>
		
		
		
		

<!-- container-scroller -->

@include('layouts.partials.footer-scripts')

</body>

</html>