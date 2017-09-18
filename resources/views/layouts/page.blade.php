<!DOCTYPE Html>
<html>
<head>
    <title>Welcome to MicroTech NA</title>
    <!--all meta and links tag-->
    @include('includes.meta')

    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>
</head>
<body>
    <!--Menu Start -->
    <section class="MenuSec">
        <div class="Mfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 custom-logo">
                        <div class="logo">
                            <a href="{{ url('/') }}">MicroTech NA</a>
                            <p>strengthening business performances</p>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="MobileMenu hidden-lg hidden-md hidden-sm">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="Menu text-right">
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
                    </div>
                    <div class="col-sm-2 col-md-3 custom-social">
                        <div class="socail">
                            <a href="https://www.facebook.com/microtechna/" target="_blank" class="fa fa-facebook face"></a>
                            <a href="https://twitter.com/@MicroTechSky" target="_blank" class="fa fa-twitter twi"></a>
                            <a href="https://plus.google.com/b/103441871439982130127/103441871439982130127?hl=en" target="_blank" class="fa fa-google goo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Menu End-->
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
    <section class="CmFooterSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <div class="SingleCmFooter">
                        <div class="logo FLogo">
                            <a href="{{ url('/home') }}">MicroTech NA</a>
                            <p>One goal above all others:  Highest level of client satisfaction. Our in-house team of web designers and developers are dedicated to building the perfect website for your company on-time and on budget.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="SingleCmFooter">
                        <h2>Our services</h2>
                        <div class="FSerMenu">
                            <h4><a href="{{ url('/web_design') }}">Website Design</a></h4>
                            <h4><a href="{{ url('/mobile_app') }}">Mobile App Development</a></h4>
                            <h4><a href="{{ url('/performance_testing') }}">Performance Testing</a></h4>
                            <h4><a href="{{ url('/web_design') }}">Web App Developments</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="SingleCmFooter">
                        <h2>Usefull links</h2>
                        <div class="FSerMenu">
                            <h4><a href="http://www.toptenoftheworld.com/" target="_blank">Top Ten of the World</a></h4>
                            <h4><a href="http://life110volts.com" target="_blank">Life 110Volts</a></h4>
                            <h4><a href="http://matesglobal.com/" target="_blank">Mates Global</a></h4>
                            <h4><a href="https://developers.google.com/speed/pagespeed/insights/" target="_blank"> Google Page Insights</a></h4>
                            <h4><a href="http://banglatyping.com" target="_blank">Bangla Software</a></h4>
                            <h4><a href="https://gsuite.google.com/" target="_blank">Webmail</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3" id="newsletters">
                    <div class="SingleCmFooter">
                        <h2>Newsletter</h2>
                        <form method="POST" action="/newsletter" @submit.prevent="onSubmit" @keydown="nl.errors.clear($event.target.name)">
                            <div class="FSerMenu">
                                <p>Don’t miss to subscribe to our news feeds, kindly fill the form below. </p>
                                <div class="FserGroup">
                                    <input v-model="nl.email" name="email" type="email" placeholder="Your Email" class="FSerMail">
                                    <span v-if="nl.errors.has('email')" v-text="nl.errors.get('email')"></span>
                                    <button class="NewsLBtn">Join!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

    {{--<script type="text/javascript" src="{{asset('js/manifest.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('js/vendor.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/jssor.slider-23.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>



    @include('includes.analytics_google')
</body>
</html>