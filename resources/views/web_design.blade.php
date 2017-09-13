@extends('layouts.page')
@section('content')
<section class="SPBanerSec SPBanerSecServ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="SpBanerSingle">
                    <h2>Responsive Web Design</h2>
                    <p>Passionate about good design,<br>
                    passionate about good design, Web Standards, usability and accessibility.</p>
                    <div class="slideBtn">
                        <a href="{{ url('/work_with_us') }}">Work with us </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% include sec_design_tab.html %}
@include('sections.importance-of-responsive-web-design')
{% include sec_design_slider.html %}
@include('sections.benefits-our-solution')
<!-- {% include request_btn.html %} -->
{% include sec_beforeafter.html %}
@include('sections.redesign-before-after')
{% include sec_designsliderthree.html %}
@include('sections.website-design-stage')
<section class="DiscusButtonSec">
    {% include sec_discuss.html %}
    @include('sections.ready-to-discuss-your-project')
    <!--     {% include sec_recognized.html %} -->
</section>
@endsection