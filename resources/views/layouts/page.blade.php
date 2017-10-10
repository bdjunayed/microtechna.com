<!DOCTYPE Html>
<html>

<head>
    <title>Welcome to MicroTech NA</title>
    <!--all meta and links tag-->
    @include('includes.meta')
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    <!--
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
-->
</head>

<body>
    <!--Header Start -->
    <div class="container-header">
        <div class="logo">
            <a href="{{ url('/') }}">MicroTech NA</a>
            <span>strengthening business performances</span>
        </div>
        <!-- Bergar menu-->
        <div class="burger"><span onclick="openNav()"> ☰ 
            </span>
            <div id="mySidenav" class="sidenav">
                <span href="javascript:void(0)" class="closebtn" onclick="closeNav()"> ✕         
                </span>
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Home</a> </li>
                    <li><a href="http://microtechna.com">About</a></li>
                    <li><a href="http://microtechna.com">Feedback</a></li>
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else

                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
                    </li>
                    @endguest

                </ul>
            </div>
        </div>
        <!-- Desktop Menu-->
        <div class="Menu">
            <ul>
                <li class="scrolls"><a href="{{ url('/about_us') }}">About us</a></li>
                <li class="scrolls"><a href="{{ url('/training') }}">Training</a></li>
                <li class="scrolls"><a href="{{ url('/services') }}" class="SubSer">Services</a>

                    <ul class="Submenu">
                        <li class="scrolls"><a href="{{ url('/web_design') }}">Website design</a></li>
                        <li class="scrolls"><a href="{{ url('/mobile_app') }}">Mobile App Development</a></li>
                        <li class="scrolls"><a href="{{ url('/performance_testing') }}">Performance testing</a></li>
                        <!-- <li class="scrolls"><a href="service_four.html">service_four</a></li> -->
                    </ul>
                </li>
                <li class="scrolls"><a href="{{ url('/work') }}">Work</a></li>
                <li class="scrolls workwith"><a href="{{ url('/work_with_us') }}">Work with us</a></li>
            </ul>
        </div>
        <div class="socail">
            <a href="https://www.facebook.com/microtechna/" target="_blank" class="fa fa-facebook face"></a>
            <a href="https://twitter.com/@MicroTechSky" target="_blank" class="fa fa-twitter twi"></a>
            <a href="https://plus.google.com/b/103441871439982130127/103441871439982130127?hl=en" target="_blank" class="fa fa-google goo"></a>
        </div>
    </div>



    <!--End Header-->
    <!--start slide-->
    <!-- <section class="HomeSlide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                         <div class="slideContent">
                            <h1>Be Bold. Experiment Everywhere.</h1>
                            <p>Test and personalize across your customers' journey with <br>Optimizely, the Experimentation Platform.</p>
                            <div class="slideBtn">
                                <a href="">learn more</a>
                                <a href="">try it free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
    <!--end slide-->
    @yield('content')

    <!--Footer Start-->
    <div class="container-footer">
        <div class="single-footer">
            <a href="{{ url('/home') }}">MicroTech NA</a>
            <p>One goal above all others: Highest level of client satisfaction. Our in-house team of web designers and developers are dedicated to building the perfect website for your company on-time and on budget.
            </p>
        </div>

        <div class="single-footer">
            <h3>Our services</h3>
            <div class="blank">
                <a href="{{ url('/web_design') }}">Website Design</a>
                <!--
                            <h4><a href="{{ url('/mobile_app') }}">Mobile App Development</a></h4>
                            <h4><a href="{{ url('/performance_testing') }}">Performance Testing</a></h4>
-->
                <a href="{{ url('/web_design') }}">Web App Developments</a>
            </div>
        </div>


        <div class="single-footer">
            <h3>Usefull links</h3>
            <div class="blank">
                <a href="http://life110volts.com" target="_blank">Life 110Volts</a>
             <a href="http://matesglobal.com/" target="_blank">Mates Global</a>
                    <a href="https://developers.google.com/speed/pagespeed/insights/" target="_blank"> Google Page Insights</a>
                <a href="http://banglatyping.com" target="_blank">Bangla Software</a>
                <a href="https://gsuite.google.com/" target="_blank">Webmail</a>
            </div>
        </div>

        <div class="single-footer">
            <h3>Newsletter</h3>
            <form method="POST" action="/newsletter" @submit.prevent="onSubmit" @keydown="nl.errors.clear($event.target.name)">
                <div class="FSerMenu">
                    <p>Don’t miss to subscribe to our news feeds, kindly fill the form below. </p>
                    <div class="FserGroup">
                        <input v-model="nl.email" name="email" id="email" type="email">
                        <span class="text-warning" v-if="nl.errors.has('email')" v-text="nl.errors.get('email')"></span>
                        <button class="btn-custom btn-primary-custom" :disabled="nl.errors.any()">Join!</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="footerwedget">
                        <p>Made With <i class="fa fa-heart" style="color:#E91E63;"></i> by <a href="http://Microtechna.com" target="_blank">APMS</a></p>
                        <p>&copy; 2017 <a href="{{ url('/') }}">MicroTech NA Inc.</a> All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footerIcon text-right">
                        <a href="https://www.facebook.com/microtechna/" class="face" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/@MicroTechSky" class="twi" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/b/103441871439982130127/103441871439982130127?hl=en" class="goo" target="_blank"><i class="fa fa-google"></i></a>
                        <a href="https://www.youtube.com/channel/UCSkG14BOJK3j0tYOFWK8O8w" class="lin" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->
    <a href="#" class="BackTo">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    {{--
    <script type="text/javascript" src="{{asset('js/manifest.js')}}"></script>--}} {{--
    <script type="text/javascript" src="{{asset('js/vendor.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/jssor.slider-23.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

    </script>


    @include('includes.analytics_google')
</body>

</html>
