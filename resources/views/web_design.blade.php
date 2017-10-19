@extends('layouts.page') @section('content')
<!-- Web design Banner area section Start Here-->
<section class="banner-training web-design-bg">
    <div class="image-overlay">
        <h2>Responsive Web Design</h2>
        <p> Passionate about good design, passionate about good design, Web Standards, usability and accessibility..</p>
        <a href="{{ url('/work_with_us') }}" class="btn-custom btn-primary-custom ">Work With us</a>
    </div>
</section>
<!-- Web design Banner area section End Here-->

<!-- Web design Tab area section Start Here -->
<div class="tab-area-section">
    <div class="under-border"></div>
    <ul id="tabs">
        <li><a id="tab1">1</a></li>
        <li><a id="tab2"> 2</a></li>
        <li><a id="tab3">3</a></li>
    </ul>
    <div class="cfx"></div>
    <div class="tab-content x y">
        <div class="container" id="tab1C">
            <h2>Responsive Web Design</h2>
            <p>
                Statistics show that a large percentage of the population sit at home browsing the web using tablet devices. With the rise in Tablets and Smartphones, this number is crucial for most businesses. Well, you can make your site mobile responsive with our reliable architectural design service. In April 2016, Google changed its ranking mechanism to prioritize websites which have optimized content and throughout the next year, we'll see companies hurrying to re-boost their Google ranks.
            </p>
        </div>
        <div class="container" id="tab2C">
            <h2>Speed Is A Killer</h2>
            <p>79% of web shoppers who have trouble with web site performance say they won't return to the site to buy again and around 44% of them would tell a friend if they had a poor experience shopping online. This means you're not just losing conversions from visitors currently on your site, but that loss is magnified to their friends and colleagues as well. The end result - lots of potential sales down the drain because of a few seconds difference</p>
        </div>
        <div class="container" id="tab3C">
            <h2>Free CMS could leave you in high water!</h2>
            <p>If your website is slow, you're losing money. To avoid such situations, we offer making websites lightning fast and mobile responsive. CMS are a great platform also has some demerits or disadvantages that could leave you in high water. Hackers and spammers usually target CMS sites because of its the popularity worldwide. Due to this fact, your site is more vulnerable to security hacks and malicious activities. Well, you can strengthen the security of your site Nearly hacking proof with our technologies.
            </p>
        </div>

    </div>
</div>
<!-- Vue js componant -->
<div class="main-slider-area">
    <!-- template for the slider component -->
<script type="text/x-template" id="img-slider-template">

</script>
<!-- demo root element -->
<div id="demo">
    <div id="slider">
    <input checked="" type="radio" name="slider" id="slide1" selected="false">
    <input type="radio" name="slider" id="slide2" selected="false">
    <input type="radio" name="slider" id="slide3" selected="false">
    <input type="radio" name="slider" id="slide4" selected="false">
    <div id="slides">
      <div id="overflow">
        <div class="inner">
          <article v-for="item in items" class="slide">
            <div class="image-container">
              <img :src="item.img" alt="item.title" />
            </div>
            <div class="title">@{{item.title}}</div>
            <div class="teaser">@{{item.content}}</div>
          </article>
        </div> <!-- .inner -->
      </div> <!-- #overflow -->
    </div>
    <label for="slide1"></label>
    <label for="slide2"></label>
    <label for="slide3"></label>
    <label for="slide4"></label>
  </div>
</div>
</div>
@endsection
