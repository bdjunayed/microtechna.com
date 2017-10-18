@extends('layouts.page') @section('content')
<section class="banner-training service-img">
    <div class="image-overlay">
        <h2>Our Services</h2>
        <p> Speed and Simplicity Optimizely, the Experimentation Platform.</p>
        <a href="{{ url('/work_with_us') }}" class="btn-custom btn-primary-custom ">Work With us</a>
    </div>
</section>

<section class="main-services">
    <div class="singleSpItem">
        <img src="https://opusonline.co/wp-content/uploads/2016/03/social-media.svg" alt="social media">
        <a href="./design.html" class="fa fa-link SpFaLink"></a>
        <a href="./design.html">Website Design</a>
        <p>make your website visitors happy, as they use more and more different devices to view web content, responsive sites are the only logical way to keep up with an ever changing market.
        </p>
    </div>
    <div class="singleSpItem">
        <img src="https://opusonline.co/wp-content/uploads/2016/03/business-integration.svg" alt="ServiceItem1.jpg">
        <a href="./mobile_app.html" class="fa fa-link SpFaLink"></a>
        <a href="./mobile_app.html">App Developments</a>
        <p>We encourage you to shop around and get a few quotes from design firms who offer the quality you are looking for, and then get a quote from us.</p>
    </div>
    <div class="singleSpItem">
        <img src="https://opusonline.co/wp-content/uploads/2016/04/mobile-control.svg" alt="ServiceItem1.jpg">
        <a href="./Performance.html" class="fa fa-link SpFaLink"></a>
        <a href="./Performance.html">Performance Testing</a>
        <p>Load, stress, and performance testing software and tools for Web servers. Interactive reports tell how many real users a Web site can handle at one time</p>
    </div>
</section>

@endsection
