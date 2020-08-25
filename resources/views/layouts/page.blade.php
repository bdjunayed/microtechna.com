<!DOCTYPE Html>
<html lang="en">

<head>
    <title>Welcome to MicroTech NA Inc., an offshore software development company </title>
    @include('layouts.meta')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css')}}" />
</head>

<body>
    <!--Header Start -->
    <div class="container-header">
        <div class="logo">
            <a href="{{ url('/') }}">
                {{--<img src="{{url('/images/logo-microtech.svg')}}" alt="MicroTech" height="42px" width="auto">--}}
                MicroTech NA
            </a>
        </div>
        <!-- Burger menu-->
        <div class="burger">
            <span onclick="openNav()"> ☰
            </span>
            <div id="mySidenav" class="sidenav">
                <span href="javascript:void(0)" class="closebtn" onclick="closeNav()"> ✕
                </span>
                <ul>
                    <li class="scrolls"><a href="{{ url('/about_us') }}">About us </a></li>
                    <li id="Drop"><a href="#" class="SubSer">Services <span>&#10095;</span></a>
                        <ul id="drop-dwoun">
                            <li class="scrolls"><a href="{{ url('/web_design') }}">Website Design</a></li>
                            <li class="scrolls"><a href="{{ url('/trainings') }}">Trainings</a></li>
                        </ul>
                    </li>
                    <li class="scrolls"><a href="{{ url('/work') }}">Work</a></li>
                    <li class="scrolls workwith hilight-menu"><a href="{{ url('/work_with_us') }}">Work with us</a>
                        <!--@guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
                        </li>
                        @endguest-->
                </ul>
            </div>
        </div>
        <!-- Desktop Menu-->
        <div class="Menu">
            <ul>
                <li class="scrolls"><a href="{{ url('/about_us') }}">About us </a></li>
                <li class="scrolls"><a href="{{ url('/services') }}" class="SubSer">Services</a>
                    <ul>
                        <li class="scrolls"><a href="{{ url('/web_design') }}">Website Design</a></li>
                        <li class="scrolls"><a href="{{ url('/trainings') }}">Trainings</a></li>
                        {{--<li class="scrolls"><a href="{{ url('/mobile_app') }}">Mobile App Development</a></li>--}}
                        {{--<li class="scrolls"><a href="{{ url('/performance_testing') }}">Performance testing</a></li>--}}
                    </ul>
                </li>
                <li class="scrolls"><a href="{{ url('/work') }}">Work</a></li>
                <li class="scrolls workwith hilight-menu"><a href="{{ url('/work_with_us') }}">Work with us</a></li>
            </ul>
        </div>

        <div class="social">
            <a href="https://www.facebook.com/microtechna/" target="_blank">
                <img src="{{url('images/facebook.svg')}}" alt="visit our fb page"/></a>
            <a href="https://twitter.com/@MicroTechSky" target="_blank">
                <img src="{{url('images/twitter.svg')}}"  alt="visit our twitter account"/></a>
            <a href="https://plus.google.com/b/103441871439982130127/103441871439982130127?hl=en" target="_blank">
                <img src="{{url('images/youtube.svg')}}"  alt="visit our youtube channel"/></a>
            <a href="https://plus.google.com/b/103441871439982130127/103441871439982130127?hl=en" target="_blank">
                <img src="{{url('images/google.svg')}}"  alt="visit our Google+ page"/></a>
        </div>
    </div>

    <div class="cfx"></div>

    @yield('content')

    <!--Footer Start-->
    <div class="container-footer">
        <div class="single-footer">
            <a href="{{ url('/home') }}">MicroTech NA</a>
            <p>One goal above all others: Highest level of client satisfaction. Our in-house team of web designers and developers are dedicated to building the perfect website for your company on-time and on budget.
            </p>
        </div>

        <div class="single-footer">
            <h3>Our Services</h3>
            <div class="blank">
                <a href="{{ url('/web_design') }}">Website Design</a>
                            {{--<h4><a href="{{ url('/mobile_app') }}">Mobile App Development</a></h4>--}}
                            {{--<h4><a href="{{ url('/performance_testing') }}">Performance Testing</a></h4>--}}
                <a href="{{ url('/web_design') }}">Web App Developments</a>
            </div>
        </div>


        <div class="single-footer">
            <h3>Useful Links</h3>
            <div class="blank">
{{--                <a href="http://life110volts.com" target="_blank">Life 110Volts</a>--}}
                <a href="http://matesglobal.com/" target="_blank">Mates Global</a>
                <a href="https://developers.google.com/speed/pagespeed/insights/" target="_blank"> Google Page Insights</a>
                <a href="http://banglatyping.com" target="_blank">Bangla Software</a>
                <a href="https://admin.google.com" target="_blank">Webmail</a>
            </div>
        </div>

        <div class="single-footer newslatter-custom" id="newsletters">
            <h3>Newsletter</h3>
            <form method="POST" action="/newsletter" @submit.prevent="onSubmit" @keydown="nl.errors.clear($event.target.name)">
                <div class="blank">
                    <p>Don’t miss to subscribe to our news feeds, kindly fill the form below.</p>
                    <div class="input-group">
                        <input v-model="nl.email" class="input-custom" name="email" type="email">
                        <button class="btn-custom btn-primary-custom" :disabled="nl.errors.any()">Join!</button>
                        <span v-if="nl.errors.has('email')" v-text="nl.errors.get('email')" class="error-text"></span>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!--Footer End-->
    <div class="container-bootom-footer">
        <div class="copyright">
            <p>&copy; <a href="{{ url('/') }}">MicroTech NA Inc.</a> 2020</p>
        </div>
        <div class="social footer-so">
            <a href="https://www.facebook.com/microtechna/" target="_blank">
                <img src="{{url('images/facebook.svg')}}" alt="Visit our Facebook page"/></a>
            <a href="https://twitter.com/@MicroTechSky" target="_blank">
                <img src="{{url('images/twitter.svg')}}"  alt="Visit our twitter page"/></a>
            <a href="https://www.youtube.com/channel/UCTMDrzwGgpJxvAL48qepGoA" target="_blank">
                <img src="{{url('images/youtube.svg')}}"  alt="Visit our Youtube channel"/></a>
        </div>
    </div>

    <button onclick="topFunction()" id="back-top" title="Go to top">
        <span>➚</span>
    </button>

    <script src="{{mix('js/manifest.js')}}"></script>
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>

    <!---- Script for Back Top Button ---->
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
                document.getElementById("back-top").style.display = "block";
            } else {
                document.getElementById("back-top").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!---- Script for berger Menu ---->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <!---- Script for Tab ---->
    <script>
        $(document).ready(function() {

            $('#tabs li a:not(:first)').addClass('inactive');
            $('.container').hide();
            $('.container:first').show();

            $('#tabs li a').click(function() {
                var t = $(this).attr('id');
                if ($(this).hasClass('inactive')) { //this is the start of our condition
                    $('#tabs li a').addClass('inactive');
                    $(this).removeClass('inactive');

                    $('.container').hide();
                    $('#' + t + 'C').fadeIn('slow');
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $("#Drop").click(function() {
                $("#drop-dwoun").toggle("slow");
            });
        });

    </script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.container-header').addClass("sticky");
            } else {
                $('.container-header').removeClass("sticky");
            }

        });

    </script>
    <!-- Script for Sticky Nav -->

    @include('includes.analytics_google')
</body>

</html>
