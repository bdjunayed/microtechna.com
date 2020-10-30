@extends('layouts.page') @section('content')
    <section class="banner-training contact-bg">
        <div class="image-overlay">
            <div class="page-title">Recruitment</div>
        </div>
    </section>


    <section class="container justify-content-center">
        <div class="row">
            <div class="col justify-content-center">Under Construction!</div>
        </div>
    </section>
    <!--start contact form-->
    <section class="contactForm" id="contactForm">
        <div class="container-contact-us">
            <form method="POST" action="/work_with_us" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

                <div class="input-group">
                    <input name="name" v-model="form.name" type="text" class="input-custom" id="name" placeholder="Your full name">
                    <span class="error-text" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                </div>

                <div class="input-group">
                    <input name="email" v-model="form.email" type="email" class="input-custom" id="email" placeholder="Email">
                    <span class="error-text" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                </div>

                <div class="input-group">
                    <input name="company" v-model="form.company" type="text" class="input-custom" id="company" placeholder="Company name">
                </div>

                <div class="input-group">
                    <textarea name="message" v-model="form.message" rows="4" cols="50" class="input-custom" id="message" placeholder="Message"></textarea>
                    <span class="error-text" v-if="form.errors.has('message')" v-text="form.errors.get('message')"></span>
                </div>

                <button class="btn-custom btn-primary-custom" :disabled="form.errors.any()">Submit</button>
            </form>

            <div class="form-social-icons">
                <div class="single-con">
                    <i class="fa fa-map-marker">📍</i>
                    <div class="address-tails">
                        <h3>Our Location:</h3>
                        <p><b>MicroTech NA Inc.</b></p>
                        <p>167-17 Hillside Ave<br>Jamaica NY 11432<br>U.S.A.</p>
                    </div>
                </div>
                <div class="single-con">
                    <i class="fa fa-phone">📱</i>
                    <div class="address-tails">
                        <h3>Give Us A Call:</h3>
                        <p>Cell: <a href="tel:+18886127778">1 (888) 612-7778</a></p>
                    </div>
                </div>
                <div class="single-con">
                    <i class="fa fa-envelope-o">📧</i>
                    <div class="address-tails">
                        <h3>Send Us An Email:</h3>
                        <p>Email: info@microtechna.com</p>
                    </div>
                </div>
            </div>
            <!--- Discuss With Your Project Start Here --->
            <div class="cfx"></div>
            <div class="ready-to-discus">
                <h2>We’re Hiring!</h2>
                <a href="" class="btn-custom btn-primary-custom ">View openings</a>
            </div>
            <!--- Discuss With Your Project End Here --->
        </div>
    </section>
    <!--end contact form-->


    {{--
    <section class="DiscusButtonSec">--}} {{--@include('sections.sign-up-to-get-the-latest-on-digital-trends')--}} {{--
</section>--}}
@endsection
