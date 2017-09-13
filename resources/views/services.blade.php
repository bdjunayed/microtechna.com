@extends('layouts.page')
@section('content')
<section class="SPBanerSec SPBanerSecServ1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="SpBanerSingle">
                    <h2>Service </h2>
                    <p>Speed and Simplicity<br>Optimizely, the Experimentation Platform.</p>
                    <div class="slideBtn">
                        <a href="{{ url('/work_with_us') }}">work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="SpItemSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="singleSpItem">
                    <div class="SingleSpImage">
                        <img src="https://opusonline.co/wp-content/uploads/2016/03/social-media.svg" alt="social media">
                        <div class="SPSingleSpOver">
                            <a href="./design.html" class="fa fa-link SpFaLink"></a>
                        </div>
                    </div>
                    <a href="./design.html">Website Design</a>
                    <p>make your website visitors happy, as they use more and more different devices to view web content, responsive sites are the only logical way to keep up with an ever changing market.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="singleSpItem">
                    <div class="SingleSpImage">
                        <img src="https://opusonline.co/wp-content/uploads/2016/03/business-integration.svg" alt="ServiceItem1.jpg">
                        <div class="SPSingleSpOver">
                            <a href="./mobile_app.html" class="fa fa-link SpFaLink"></a>
                        </div>
                    </div>
                    <a href="./mobile_app.html">App Developments</a>
                    <p>We encourage you to shop around and get a few quotes from design firms who offer the quality you are looking for, and then get a quote from us.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="singleSpItem">
                    <div class="SingleSpImage">
                        <img src="https://opusonline.co/wp-content/uploads/2016/04/mobile-control.svg" alt="ServiceItem1.jpg">
                        <div class="SPSingleSpOver">
                            <a href="./Performance.html" class="fa fa-link SpFaLink"></a>
                        </div>
                    </div>
                    <a href="./Performance.html">Performance Testing</a>
                    <p>Load, stress, and performance testing software and tools for Web servers. Interactive reports tell how many real users a Web site can handle at one time</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection