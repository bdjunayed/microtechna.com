@extends('layouts.page')
@section('content')
<!--start slide-->
<section class="HomeSlide">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-2">
                <div class="slideContent">
                    <h1>creative Web Design & Web Development company</h1>
                    <p>offering custom design, HTML5 and PHP solutions<br>at a highly competitive price.</p>
                    <!--<div class="slideBtn">
                        <a href="./design.html">learn more</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--end slide-->

<!-- section_service.html -->
<section class="serviceSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commonTitle commSr text-center">
                    <h2>my service</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="serviceContent">
                    <div class="SerIcon  text-center">
                        <i class="fa fa-server" aria-hidden="true"></i>
                    </div>
                    <div class="serText  text-center">
                        <h2>Mobile Responsive Design</h2>
                        <p>We desing mobile first fluid responsive web, meaning the content moves freely across all screen resolutions and all devices.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="serviceContent">
                    <div class="SerIcon  text-center">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    </div>
                    <div class="serText  text-center">
                        <h2>Quality Website Design </h2>
                        <p>Our Budget Buster package is ideal for business start ups and customers on small budgets looking for high quality website.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="serviceContent">
                    <div class="SerIcon  text-center">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                    </div>
                    <div class="serText  text-center">
                        <h2> Blazing-Fast page loading</h2>
                        <p>We use hand crafted fast technology architecture. Faster than any WordPress site. If you don’t believe me then just compare our site with any other CMS site on Google Page Insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section_service.html -->
<section class="keyTechnologySec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="keyTechnologyTitle text-center">
                    <h1>Key Technologies</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="keyTecSingle">
                    <img src="./images/web-app-development-laravel.png" alt="laravel">
                    <h3>Laravel Framework</h3>
                    <p>Laravel is a high-performance PHP development framework best for developing Web 2.0 applications.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="keyTecSingle keyTecSingle1">
                    <img src="./images/node-js-website-builder'.png" alt="node js">
                    <h3>Node.js</h3>
                    <p>Node.js is a cross-platform runtime environment built on the V8 JavaScript engine developed by Google.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="keyTecSingle">
                    <img src="./images/jekyll-web-developer.png" alt="jekyll web developer">
                    <h3>Jekyll</h3>
                    <p>Jekyll is a Static site generator tools, it is a better choice than the WordPress.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="keytitle2 text-center">
                    <img src="./images/tech-mobile-app-dev.png" alt="tech mobile app dev">
                    <h1>The team also specialises in: Yii, Elastic, MySQL, MongoDB, Redis, AngularJS,<br/> BackboneJS & many more</h1>
                </div>
                <div class="keytechBtn text-center">
                    <ul>
                        <li><a href="{{ url('/mobile_app') }}" class="active"> Web-based software Development</a></li>
                        <li><a href="{{ url('/web_design') }}">Web Design and Development</a></li>
                        <li><a href="{{ url('/performance_testing') }}">Mobile apps Development</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- {% include sympleTitle.html %} -->
{% include section_industry.html %}
@include('sections.we-serve-all-industries')
{% include feature_team.html %}
@include('sections.core-features')
{% include sec_discuss.html %}
@include('sections.ready-to-discuss-your-project')
{% include sec_contact.html %}
@include('sections.location-and-contact')
@endsection