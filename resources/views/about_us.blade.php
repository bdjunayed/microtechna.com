@extends('layouts.page') @section('content')
<section class="banner-training">
    <div class="image-overlay">
        <h2>About Us And What We Do !</h2>
        <p> Creative. Responsive. On Mission.</p>
        <a href="{{ url('/work_with_us') }}" class="btn-custom btn-primary-custom ">Work With us</a>
    </div>
</section>
<!--  About Us Container Start Here  -->
<section class="about-us-container">
    <div class="about-heading">
        <h1>Experience <span>Microtech</span></h1>
        <h4> is recognized as a <span>Excellent Digital Agency</span> by </h4>
    </div>
    <!--- Main About Us Start Here --->
    <div class="main-about">
        <div class="single-section">
            <div class="single-about">
                <h2>Highest level of client satisfaction</h2>
                <p>One goal above all others: In-house team of web designers, developers and SEO experts uphold the highest standards for project planning and execution. Dedicated to building the perfect website for client’s company <span>on-time</span> and <span>on budget</span>. </p>
            </div>
            <div class="single-about">
                <img src="./images/comp.jpg" alt="">
            </div>
        </div>
        <div class="single-section">
            <div class="single-about">
                <img src="./images/web-app-developer-bangladesh'.jpg" alt="">
            </div>
            <div class="single-about">
                <h2>Collaboration</h2>
                <p>Assembling a talented team of digital strategists, designers, developers, marketers, communications specialists, project managers and business developers to work in a collaborative manner on our client projects. Builded on each other’s expertise, working together in teams to generate great outcomes for projects.</p>
            </div>
        </div>
        <div class="single-section">
            <div class="single-about">
                <h2>Aims</h2>
                <p>to provide high-quality training with quick turn-around time. MicroTech helping to build the knowledge & skill bridge between industries & manpower by training new immigrants and existing personnel to make a better future in abroad
                </p>
                <p>At <span>MicroTech </span>gave our training to many students successfully past few years and some of them are doing a job in the respected field in USA respected industry successfully with attractive salary.
                </p>
            </div>
            <div class="single-about">
                <img src="./images/web-app-developer.jpg" alt="">
            </div>
        </div>

        <div class="single-section">
            <div class="single-about">
                <img src="./images/web-app-developer-bangladesh1.jpg" alt="">
            </div>
            <div class="single-about">
                <h2>Training</h2>
                <p>MicroTech has for more than four years of supported Learning delivery by expert information technology professionals successfully and satisfying our valuable trainee. Offering online and offline training for the key areas such as Software testing, Selenium, QTP testing, Java, C#, Oracle Database Administrator training, and much more. </p>
                <p>Expertise in training with quality of demos and samples which is keenly focused on our business. We have a mature learning proven process where you able to rely on us; feel free to see our testimonials & references.</p>
            </div>
        </div>
    </div>
    <!--- Main About us End Here --->

    <!--- Discuss With Your Project Start Here --->
    <div class="ready-to-discus">
        <h2>Ready to discuss your project?</h2>
        <a href="" class="btn-custom btn-primary-custom ">Work With Us</a>
    </div>
    <!--- Discuss With Your Project End Here --->

    <!--- Our Blog Section Start Here --->
    <section class="blog-area">
        <div class="single-blog">
            <img src="./images/about-blog.png" alt="">
            <h2>our <span>BLOG</span></h2>
            <p>Our blog provides regular insight into the latest industry trends in web design and digital marketing.
            </p>
            <a href="" class="btn-custom btn-primary-custom">view more</a>
        </div>
        <div class="single-blog">
            <img src="./images/jobs-careers.png" alt="">
            <h2>Jobs & <span>Careers</span></h2>
            <p>Join us, send us your resume to fit with the job listings to find out what might be right for you.
            </p>
            <a href="" class="btn-custom btn-primary-custom">view more</a>
        </div>
        <!--- Our Blog Section End Here --->

    </section>
    <section class="we-speak">  
    <div class="speak-heading">
        <h2>The Languages <span>We Speak</span></h2>
    </div>
    
    <div class="single-speak">
        <img src="./images/english.png" alt="">
        <h2>English</h2>
    </div>
          
           
    <div class="single-speak">
        <img src="./images/spanish.png" alt="">
        <h2>Spanish</h2>
    </div>

         
    <div class="single-speak">
        <img src="./images/japanese.png" alt="">
        <h2>Japanese</h2>
    </div>
   

    <div class="single-speak">
        <img src="./images/french.png" alt="">
        <h2>French</h2>
    </div>

    
<!--        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <div class="DesignHead countryHead countryHead2">
                    <h2>Some of <span>Our Hobbies</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-xs-3 col-sm-2 noPadding">
                <div class="SingleCountry hoby text-center">
                    <i class="fa fa-bicycle" aria-hidden="true"></i>
                    <h2>World Travel</h2>
                </div>
            </div>
            <div class="col-lg-2 col-xs-3 col-sm-2 ">
                <div class="SingleCountry hoby text-center">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <h2>Competitive Cycling</h2>
                </div>
            </div>

            <div class="col-lg-2 col-xs-3 col-sm-2">
                <div class="SingleCountry hoby text-center">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <h2>Martial Arts</h2>
                </div>
            </div>
            <div class="col-lg-1 col-xs-3 col-sm-2">
                <div class="SingleCountry hoby text-center">
                    <i class="fa fa-futbol-o" aria-hidden="true"></i>
                    <h2>Bowling</h2>
                </div>
            </div>
            <div class="col-lg-2 col-xs-4 col-sm-2 disNone767">
                <div class="SingleCountry hoby text-center">
                    <i class="fa fa-commenting" aria-hidden="true"></i>
                    <h2>Hiking and climbing </h2>
                </div>
            </div>
            <div class="col-lg-2 col-xs-3 col-sm-2 disNone767">
                <div class="SingleCountry hoby text-center">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <h2>Cooking, fine dining </h2>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>-->
</section> 
</section>
    <!-- About us Container End Here-->
    <section class="signupSec">
        @include('sections.sign-up-to-get-the-latest-on-digital-trends')
    </section>

    @endsection
