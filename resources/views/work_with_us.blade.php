@extends('layouts.page')
@section('content')

<section class="SPBanerSec SPBanerSecwork">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="SpBanerSingle">
                    <h2>Contact us</h2>
                    <p>Test and personalize across your customers' journey with <br>Optimizely, the Experimentation Platform.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--start contact form-->
<section class="contactFormSec" id="contactForm">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <form method="POST" action="/work_with_us" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

                    <div class="input-group">
                        <label for="name">Full Name*</label>
                        <input name="name" v-model="form.name" type="text" class="inNamework" id="name" placeholder="Your full name">
                        <span class="text-warning" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>

                    </div>
                    <div class="input-group">
                        <label for="email">Email*</label>
                        <input name="email" v-model="form.email" type="email" class="inNamework" id="email" placeholder="Email">
                        <span class="text-warning" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                    </div>

                    <div class="input-group">
                        <label for="company">Company Name</label>
                        <input name="company" v-model="form.company" type="text" class="inNamework" id="company" placeholder="Company name">

                    </div>
                    <div class="input-group">
                        <label for="message">Your Message</label>
                        <textarea name="message" v-model="form.message" class="inNamework msgboxwork" id="message" placeholder="Message"></textarea>
                        <span class="text-warning" v-if="form.errors.has('message')" v-text="form.errors.get('message')"></span>
                    </div>
                    <button class="btn btn-primary" :disabled="form.errors.any()">Submit</button>
                </form>

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


{{--<section class="DiscusButtonSec">--}}
    {{--@include('sections.sign-up-to-get-the-latest-on-digital-trends')--}}
{{--</section>--}}

@endsection