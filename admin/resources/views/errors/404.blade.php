    @extends('layouts.landinglayout')
    @section('content')
       
	  <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section small-par" data-scrollax-parent="true">
                        <div class="bg"  data-bg="{{asset('images/user_bg.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="error-wrap">
                                <div class="">
                                    <h2>404</h2>
                                </div>
                                <p>It seems like you're lost here.</p>
                                <div class="clearfix"></div>
                                <form action="#">
                                    <input name="se" id="se" type="text" class="search" placeholder="Search Errands" value="Search...">
                                    <button class="search-submit color-bg" id="submit_btn"><i class="fal fa-search"></i> </button>
                                </form>
                                <div class="clearfix"></div>
                                <p>Or</p>
                                <a href="{{ url('/') }}" class="btn   color2-bg">Go back<i class="far fa-home-alt"></i></a>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                </div>
                <!--content end-->
            </div>
    @endsection
   