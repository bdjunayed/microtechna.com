@extends('layouts.page') @section('content')
<section class="banner-training about-bg">
    <div class="image-overlay">
        <div class="page-title">About us</div>
        <div class="page-slogan"> Creative & Responsive.</div>
        <a href="{{ url('/work_with_us') }}" class="btn-custom btn-primary-custom ">Work With us</a>
    </div>
</section>
<!--  About Us Container Start Here  -->
<section class="about-us-container">
    <div class="about-heading">
        <h1><span>Experience </span>Microtech</h1>
        <p >is recognized as a <span>Excellent Digital Agency</span></p>
    </div>
    <!--- Main About Us Start Here --->
    <div class="main-about">
        <div class="single-section">
            <div class="single-about">
                <h2>Highest level of client satisfaction</h2>
                <p class="hy">One goal above all others: In-house team of web designers, developers and SEO experts uphold the highest standards for project planning and execution. Dedicated to building the perfect website for client’s company <span>on-time</span> and <span>on budget</span>. </p>
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
                <p class="hy">Assembling a talented team of digital strategists, designers, developers, marketers, communications specialists, project managers and business developers to work in a collaborative manner on our client projects. Builded on each other’s expertise, working together in teams to generate great outcomes for projects.</p>
            </div>
        </div>
        <div class="single-section">
            <div class="single-about">
                <h2>Aims</h2>
                <p class="hy">to provide high-quality training with quick turn-around time. MicroTech helping to build the knowledge & skill bridge between industries & manpower by training new immigrants and existing personnel to make a better future in abroad
                </p>
                <p class="hy">At <span>MicroTech </span>gave our training to many students successfully past few years and some of them are doing a job in the respected field in USA respected industry successfully with attractive salary.
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
                <h2>Trainings</h2>
                <p class="hy">MicroTech has for more than four years of supported Learning delivery by expert information technology professionals successfully and satisfying our valuable trainee. Offering online and offline training for the key areas such as Software testing, Selenium, QTP testing, Java, C#, Oracle Database Administrator training, and much more. </p>
                <p class="hy">Expertise in training with quality of demos and samples which is keenly focused on our business. We have a mature learning proven process where you able to rely on us; feel free to see our testimonials & references.</p>
            </div>
        </div>
    </div>
    <!--- Main About us End Here --->
<div class="cfx"></div>
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
               <p>Our blog provides regular insight into the latest industry trends in web design and digital marketing.
            </p>
            <a href="" class="btn-custom btn-primary-custom">view more</a>
        </div>
        <!--- Our Blog Section End Here --->

    </section>
    <div class=""></div>
    <section class="we-speak x y">
        <div class="speak-heading">
            <h2>The Languages <span>We Speak</span></h2>
        </div>

        <div class="center">
            <div class="single-speak">
                <img src="./images/english.png" alt="">
                <h4>English</h4>
            </div>
            <div class="single-speak">
                <img src="./images/spanish.png" alt="">
                <h4>Spanish</h4>
            </div>
            <div class="single-speak">
                <img src="./images/japanese.png" alt="">
                <h4>Japanese</h4>
            </div>
            <div class="single-speak">
                <img src="./images/french.png" alt="">
                <h4>French</h4>
            </div>
            <div class="single-speak">
                <img src="./images/arabic.png" alt="">
                <h4>Arabic</h4>
            </div>
        </div>
    </section>
    <div class="cfx"></div>
    <div class="our-main-hobbies x y">
        <div class="hobbies-heading">
            <h2>Some of <span>Our Hobbies</span></h2>
        </div>
        <div class="single-hobbies">
            <li>🏅 World Travel</li>
        </div>
        <div class="single-hobbies">
            <li>🏅 Competitive Cycling</li>
        </div>
        <div class="single-hobbies">
            <li>🏅 Martial Arts</li>
        </div>
        <div class="single-hobbies">
            <li>🏅 Bowling</li>
        </div>
        <div class="single-hobbies">
            <li>🏅 Cooking, fine dining </li>
        </div>
        </div>
    </div>
    <div class="cfx"></div>
    <div class="Newsleeter-section">
        <h2>Sign Up to get the latest on Digital Trends</h2>
        <form method="POST" action="newsletter_email.php">
            <div class="input-group">
                <input type="email" name="newsletter" required="required" class="input-custom" placeholder="Enter Your Email">
                <button type="submit" class="btn-custom btn-primary-custom" name='submit'>sign up<i class="fa fa-chevron-right"></i> </button>
            </div>
        </form>
    </div>

</section>
<!-- About us Container End Here-->
@endsection
