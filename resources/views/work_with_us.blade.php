@extends('layouts.page')
@section('content')
<section class="SPBanerSec SPBanerSecwork">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="SpBanerSingle">
                    <h2>Work With Us </h2>
                    <p>Test and personalize across your customers' journey with <br>Optimizely, the Experimentation Platform.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--start contact form-->
<section class="contactFormSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">


                <form id="formaction" action="sendmail.php" method="POST" class="conForm">


                    <div class="input-group">
                        <label for="exampleInputEmail1">Full Name*</label>
                        <input type="text" name="name" class="inNamework" placeholder="Your Full Name" required="required">
                    </div>
                    <div class="input-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="email" name="email" class="inNamework" placeholder="Email" required="required">
                    </div>

                    <div class="input-group">
                        <label for="exampleInputPassword1">Company Name</label>
                        <input type="text" name="companyName" class="inNamework" placeholder="Company Name" value=" ">
                    </div>
                    <div class="input-group">
                        <label for="exampleInputPassword1">Your Message</label>
                        <textarea name="message" class="inNamework msgboxwork" placeholder="Message"></textarea>
                        <input type="text" name="_gotcha" style="display:none" />
                    </div>
                    <button type="submit" name="submit" class="btn btn-default buton">Submit</button>
                </form>
               <!-- <script>
                    var contactform =  document.getElementById('formaction');
                    contactform.setAttribute('action', '//formspree.io/' + 'junayed' + '@' + 'microtechna' + '.' + 'com');
                </script>-->
            </div>
            <div class="col-lg-6">
                <div class="contactInfo">
                    <div class="conIcon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contactText">
                        <h3>Our location:</h3>
                        <h4>MicroTech Corporation</h4>
                        <p>Level 2 Tower Tulip, Nikunja 2<br>Dhaka 1229 Bangladesh</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="contactInfo">
                    <div class="conIcon conIcon1">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contactText">
                        <h3>Give us call</h3>
                        <p>Phone: +‎880 191 002 9832</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="contactInfo">
                    <div class="conIcon conIcon2">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="contactText">
                        <h3>Send us message</h3>
                        <p>Email: junayed@microtechna.com</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="hireme">
                    <h3>We’re Hiring!</h3>
                    <p>Become part of a team that cares about the quality of its <br>work and the quality of life.</p>
                    <a href="{{ url('/work_with_us') }}">view openings <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end contact form-->
<!--Desing page DiscusButton Start here By Shagor-->

<section class="DiscusButtonSec">
    <!-- {% include sec_discuss.html %} -->
    <!--     {% include sec_recognized.html %} -->
    {% include sec_signup.html %}
    @include('sections.sign-up-to-get-the-latest-on-digital-trends')
</section>