@extends('layouts.page')
@section('content')
    <section class="banner-training">
        <div class="image-overlay">
            <h2>PHP for beginners</h2>
            <p>Hands on training</p>
            <a href="{{ url('/work_with_us') }}" class="btn-custom btn-primary-custom ">Enroll now</a>
        </div>
    </section>

    <div class="container-training">
        <div class="training-child-page">

            <h1>PHP for beginners</h1>
            <div class="title-image">
                <img src = "{{url('images/php-for-beginners.jpg')}}" alt = "PHP traioning for beginners" />
            </div>

            <p><strong>Goals:</strong> Understanding the fundamentals of PHP/MySQL.</p>
            <p>PHP runs half of the webservers from total of entire world. Now its more powerful and consumed less memories from its previous versions. We focus this course for beginners and freshers with zero experience with programming. Mainly concerned with fundamentals of programming and database basic concept with few tools like git.</p>
            <p>From this course you can migrate to the popular framework such as Laravel and build your professional programming career.</p>

            <div class="info-box">
                <p><strong>Duration:</strong> 18 hours / 12 classes /1.5 hours per classes.</p>
                <p><strong>Prerequisite:</strong>Freshers with basic english can apply.</p>
                <p><strong>Seats:</strong> 6 nos</p>
                <p><strong>Supplementary module:</strong> Software versioning with git.</p>
                <p><strong>Location:</strong> Nikunja 2 Dhaka</p>
                <p><strong>Course fees:</strong>: Tk. 12,000/=</p>
            </div>

            <h2>Syllabus:</h2>
            <div class="row">
                <ul>
                    <div class="col6">
                        <li>Installation</li>
                        <li>Hello World!</li>
                        <li>Php server</li>
                        <li>Variables</li>
                        <li>Code inside the HTML</li>
                        <li>URL parameter</li>
                        <li>URL parameter security</li>
                        <li>Separation of logic layers</li>
                        <li>Arrays</li>
                        <li>Arrays output in HTML</li>
                        <li>Arrays Associative</li>
                        <li>Booleans</li>
                        <li>Functions</li>
                    </div>
                    <div class="col6">
                        <li>MySQL Database</li>
                        <li>Classes</li>
                        <li>PDO</li>
                        <li>Refactor</li>
                        <li>Passwords file</li>
                        <li>Router</li>
                        <li>Views</li>
                        <li>Filtering</li>
                        <li>GET, POST</li>
                        <li>Composer</li>
                        <li>Container</li>
                        <li>Controllers</li>
                        <li>Namespaces</li>
                        <li>Laravel</li>
                    </div>
                </ul>
            </div>
        </div>

    </div>
    <!--.Contact-us-area-->
    <a href="#jot"></a>
    <div class="contact-us">
        <h2 class="text-center">বিস্তারিত জানতে কল করুন আমাদের নিউ ইউর্ক অথবা ঢাকা সেন্টার এ </h2>
        <div class="single-content">
            <h3>USA Corporate Office</h3>
            <p>167-17, Hillside Ave, 2FL</p>
            <p>Jamaica, NY 11432</p>
            <p><b>Call, Text, Voice message:</b></p>
            <p>929.200.0604</p>
            <p>917.257.4204</p>
        </div>

        <div class="single-content">
            <h3>Dhaka Branch Office </h3>
            <div class="custom-right">
                <p>Kha 21, Road 5, Nikunjo 2</p>
                <p>Dhaka 1215, Bangladesh</p>
                <p><b>Call, Text, Voice message:</b></p>
                <p>0177 592 1666</p>

            </div>
        </div>

        <div class="single-content last-column">
            <a href="#">MicroTech NA</a>
            <p>Call for clarifiaction</p>
            <h3>1.888.612.7778</h3>
        </div>
        <div class="cfx"></div>
        <div class="trainig-con-button">
            <a href="https://form.jotform.me/72975839174473" class="btn-custom btn-primary-custom ">Click here to Contact for Details</a>
        </div>
    </div>
@endsection