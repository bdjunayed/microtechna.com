@extends('layouts.page') @section('content')
<!-- Web design Banner area section Start Here-->
<section class="banner-training work-bg">
    <div class="image-overlay">
        <div class="page-title">Our Latest Work</div>
        <a href="{{ url('/work_with_us') }}" class="btn-custom btn-primary-custom ">Work With us</a>
    </div>
</section>
<div class="cfx"></div>
<div class="work-main-area-section">
    <div class="section-one">
        <div class="single-work-01">
            <div class="content-overlay"></div>
            <img src="./images/bang-typing-software-bs1.png" alt="">
            <div class="fadein-bootm">
                <h3>Bhasha shoinik</h3>
            </div>
            <div class="content-details">
                <p>Apps • UX/UI</p>
                <a href=" {{ url('/') }}">Home</a>
            </div>

        </div>
        <div class="single-work-01">
            <div class="content-overlay"></div>
            <img src="./images/website-development-webapp-dev2.png" alt="">
            <div class="fadein-bootm">
                <h3>System Netware Ltd.</h3>
            </div>
            <div class="content-details">
                <p>Apps • UX/UI</p>
             <a href=" {{ url('/') }}">Home</a>
            </div>

        </div>
    </div>
    <div class="a">
        <div class="single-work-01">
            <div class="content-overlay"></div>
            <img src="./images/Redesign4.jpg" alt="">
            <div class="fadein-bootm">
                <h3>Sports HTML5 Theme</h3>
            </div>
            <div class="content-details">
                <p>This is wonderful html theme</p>
               <a href=" {{ url('/') }}">Home</a>
            </div>
        </div>
    </div>
    <div class="b">
        <div class="single-work-01">
            <div class="content-overlay"></div>
            <img src="./images/Redesign3.jpg" alt="">
            <div class="fadein-bootm">
                <h3>Fruits HTML5 Theme</h3>
            </div>
            <div class="content-details">
                <p>This is Minimal fruits Theme</p>
                <a href=" {{ url('/') }}">Home</a>
            </div>
        </div>
        <div class="last-full-cumns">
            <div class="single-work-01">
                <div class="content-overlay"></div>
                <img src="./images/Redesign2.jpg" alt="">
                <div class="fadein-bootm">
                    <h3>Repairs Shop HTML5 Theme</h3>
                </div>
                <div class="content-details">
                    <p>Apps • UX/UI</p>
                    <a href=" {{ url('/') }}">Home</a>
                </div>
            </div>
        </div>
        <div class="c">
            <div class="single-work-01">
                <div class="content-overlay"></div>
                <img src="./images/Redesign.jpg" alt="">
                <div class="fadein-bootm">
                    <h3>Garments Exports HTML theme</h3>
                </div>
                <div class="content-details">
                    <p>Apps • UX/UI</p>
                  <a href=" {{ url('/') }}">Home</a>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="cfx"></div>

<!--
        <div class="row">
            <div class="col-lg-4 noPadding">
                <div class="folioImg">
                    <img src="./images/w3.jpg" alt="">
                    <div class="imgoverLay"></div>
                </div>
            </div>
            <div class="col-lg-8 noPadding">
                <div class="folioImg folioImg1">
                    <img src="./images/w4.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>AnimalPak</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
               
                <div class="folioImg folioImg2">
                    <img src="./images/w5.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>Bonchon</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="folioimgContent folioimgContentSagor">
                            <p>
                                At Lounge Lizard, our success is measured by your success. For us it’s not just creating
                                something that looks great; it needs to deliver results!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 noPadding">
                <div class="folioImg folioImg1">
                    <img src="./images/w6.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>AnimalPak</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
                <div class="folioImg folioImg2">
                    <img src="./images/w7.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>Bonchon</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="folioImg">
                            <img src="./images/w9.jpg" alt="">
                            <div class="imgoverLay"></div>
                            <div class="fOverText">
                                <h2>Bonchon</h2>
                            </div>
                            <div class="OverBtn text-center">
                                <p>Apps • UX/UI</p>
                                <a href="">view case study</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 noPadding">
                <div class="folioImg">
                    <img src="./images/w8.jpg" alt="">
                    <div class="imgoverLay"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 noPadding">
                <div class="folioImg">
                    <img src="./images/w10.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>Thor</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 noPadding">
                <div class="folioImg">
                    <img src="./images/w11.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>Siraj</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 noPadding">
                <div class="folioImg">
                    <img src="./images/w12.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>KYBOE!</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 noPadding">
                <div class="folioimgContent folioimgContentSagor1">
                    <p>
                        We pour every ounce of creativity, tech wizardry, and passion into every project
                    </p>
                </div>
            </div>
            <div class="col-lg-4 noPadding">
                <div class="folioImg">
                    <img src="./images/w13.jpg" alt="">
                    <div class="imgoverLay"></div>
                    <div class="fOverText">
                        <h2>Motorola</h2>
                    </div>
                    <div class="OverBtn text-center">
                        <p>Apps • UX/UI</p>
                        <a href="">view case study</a>
                    </div>
                </div>
            </div>
        </div>-->

@endsection
