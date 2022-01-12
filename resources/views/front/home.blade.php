@extends('layouts.site')
@section('title', 'Home')

@section('slider')
    @include('front.includes.slider')
@stop

@section('content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">

                <div class="section">
                    <div class="section_wrapper clearfix">
                        <div class="column one column_fancy_heading">
                            <div class="fancy_heading fancy_heading_icon">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="zoomInLeftLarge">
                                    <span class="icon_top"><i class="icon-map"></i></span>
                                    <h2 class="title">
                                        {{__('site/mainhome.Categories')}}
                                    </h2>
                                    <div class="inside">
                                        <span class="big">
                                            {{__('site/mainhome.Specialized And Distinguished')}}
                                            {{__('site/mainhome.In Carving And Shaping')}}
                                            {{__('site/mainhome.Marble And Granite.')}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column one column_portfolio">
                            <div class="portfolio_wrapper isotope_wrapper">
                                <ul class="portfolio_group lm_wrapper isotope grid">

                                    @isset($categories)
                                        @foreach($categories as $category)
                                            <li class="portfolio-item isotope-item category-banner wide tall">

                                                <div class="portfolio-item-fw-bg flv_style_port_1">

                                                    <div class="portfolio-item-fw-wrapper">

                                                        <div class="image_frame scale-with-grid">
                                                            <div class="image_wrapper">
                                                                <a href="{{route('category', $category->slug)}}">
                                                                    <div class="mask"></div>
                                                                    <img width="576" height="450"
                                                                            src="{{$category->photo}}"
                                                                            class="scale-with-grid wp-post-image"
                                                                            alt="portfolio_1" />
                                                                </a>

                                                                <div class="image_links triple">
                                                                    <a href="{{$category->photo}}"
                                                                        class="zoom" rel="prettyphoto">
                                                                        <i class="icon-search"></i>
                                                                    </a>
                                                                    <a target="_blank"
                                                                        href="#"
                                                                        class="external">
                                                                        <i class="icon-forward"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="link">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="desc">
                                                            <div class="title_wrapper">
                                                                <h5 class="entry-title">
                                                                    <a href="{{route('category', $category->slug)}}">
                                                                        {{$category->name}}
                                                                    </a>
                                                                </h5>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        @endforeach
                                    @endisset
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="section flv_sections_5">

                    <div class="section_wrapper clearfix">
                        {{-- <img src="{{asset('ashry/front/images/marble/banner-171.jpg')}}" alt="..."> --}}
                        <div class="items_group clearfix">
                            <!-- Page Title-->

                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <h2 class="title">
                                        {{__('site/mainhome.Why You still Love Our Marble')}} &amp;
                                        {{__('site/mainhome.Granyt ?')}}
                                    </h2>
                                </div>

                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="bounceIn">
                                        <div class="number" data-to="200">
                                            0
                                        </div>
                                        <h3 class="title">
                                            {{__('site/mainhome.Products')}}
                                        </h3>
                                        <hr class="hr_narrow" />
                                        <div class="desc"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="bounceIn">
                                        <div class="number" data-to="650">
                                            0
                                        </div>
                                        <h3 class="title">
                                            {{__('site/mainhome.Sculpture')}}
                                            &amp; {{__('site/mainhome.Marble')}}
                                        </h3>
                                        <hr class="hr_narrow" />
                                        <div class="desc"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="bounceIn">
                                        <div class="number" data-to="9518">
                                            0
                                        </div>
                                        <h3 class="title">
                                            {{__('site/mainhome.Happy Clients')}}
                                        </h3>
                                        <hr class="hr_narrow" />
                                        <div class="desc"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="bounceIn">
                                        <div class="number" data-to="21">
                                            0
                                        </div>
                                        <h3 class="title">
                                            {{__('site/mainhome.Different Product')}}
                                        </h3>
                                        <hr class="hr_narrow" />
                                        <div class="desc"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section flv_sections_6" id="start">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">

                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_icon_box">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="fadeInLeftLarge">
                                    <div class="icon_box icon_position_top has_border">
                                        <a class="scroll" href="#">
                                            <div class="icon_wrapper">
                                                <div class="icon">
                                                    <i class="icon-lightbulb-line"></i>
                                                </div>
                                            </div>

                                            <div class="desc_wrapper">
                                                <h4>
                                                    + 200 {{__('site/mainhome.pre-made layouts')}}
                                                </h4>
                                                <div class="desc">
                                                    {{__('site/mainhome.We created awesome')}}
                                                    <span class="tooltip"
                                                            data-tooltip="Click to scroll down">
                                                            {{__('site/mainhome.pre-made layouts')}}
                                                    </span> .
                                                    <br>
                                                    {{__('site/mainhome.Choose one of them and')}}
                                                    {{__('site/mainhome.use for own business site.')}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_icon_box">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="zoomIn">
                                    <div class="icon_box icon_position_top has_border">
                                        <a href="#">
                                            <div class="icon_wrapper">
                                                <div class="icon">
                                                    <i class="icon-beaker-line"></i>
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>
                                                    {{__('site/mainhome.Fully Customizable')}}
                                                </h4>
                                                <div class="desc">
                                                    {{__('site/mainhome.Don`t waste your time and within')}}
                                                    {{__('site/mainhome.minutes create your flate or vella easily.')}}
                                                    <br> {{__('site/mainhome.You will love it!')}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_icon_box">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="fadeInRightLarge">
                                    <div class="icon_box icon_position_top no_border">
                                        <a href="#">
                                            <div class="icon_wrapper">
                                                <div class="icon">
                                                    <i class="icon-comment-line"></i>
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>
                                                    {{__('site/mainhome.Free support')}} &amp;
                                                    {{__('site/mainhome.updates')}}
                                                </h4>
                                                <div class="desc">
                                                    {{__('site/mainhome.This theme is always updated on time.')}}
                                                    <br>
                                                    {{__('site/mainhome.We also offer')}}
                                                    <span class="tooltip"
                                                            data-tooltip="For support please visit theme forum">
                                                            {{__('site/mainhome.Free support')}}
                                                    </span>
                                                    {{__('site/mainhome.For all our themes!')}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section flv_sections_4">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Page Title-->

                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="zoomInLeftLarge">
                                        <span class="icon_top">
                                            <i class="icon-map"></i>
                                        </span>
                                        <h2 class="title">
                                            {{__('site/mainhome.Simble Guide')}}
                                        </h2>
                                        <div class="inside">
                                            <span class="big">
                                                {{__('site/mainhome.Specialized And Distinguished')}}
                                                {{__('site/mainhome.In Carving And Shaping')}}
                                                {{__('site/mainhome.Marble And Granite.')}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- One Second (1/2) Column -->
                            <div class="column one-second column_column">
                                <div class="column_attr ">
                                    <span class="big">
                                        {{__('site/mainhome.We have high experience in all')}}
                                        {{__('site/mainhome.sculpting works and making statues')}}
                                        {{__('site/mainhome.with the latest technologies and')}}
                                        {{__('site/mainhome.equipment We have all kinds')}}
                                        {{__('site/mainhome.of marble and granite and')}}
                                        {{__('site/mainhome.the latest machines.')}} &amp;
                                        {{__('site/mainhome.The possibility of transportation to')}}
                                        {{__('site/mainhome.any place and there are great designs')}}
                                    </span>
                                </div>
                            </div>

                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_column">
                                <div class="column_attr animate" data-anim-type="zoomIn">
                                    <div class="aligncenter">
                                        <img src="{{asset('ashry/front/images/walkway-35.jpg')}}"
                                                alt="...">
                                    </div>
                                </div>
                            </div>

                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_column">
                                <div class="column_attr animate" data-anim-type="zoomIn">
                                    <div class="aligncenter">
                                        <img src="{{asset('ashry/front/images/taj-mahal.jpg')}}"
                                                alt="...">
                                    </div>
                                </div>
                            </div>

                            <!-- One full width row-->
                            <div class="column one column_slider">

                                <!-- Slider Content -->
                                <div class="content_slider ">
                                    <ul class="content_slider_ul">
                                        @isset($sliders)
                                            @foreach($sliders as $slider)
                                                <li class="content_slider_li_1">
                                                    <img width="890" height="200"
                                                        src="{{$slider->photo}}"
                                                        class="scale-with-grid wp-post-image"
                                                        alt="shortcodes_slider_1" />
                                                </li>
                                            @endforeach
                                        @endisset
                                    </ul>

                                    <a class="button button_js slider_prev"
                                            href="#">
                                        <span class="button_icon">
                                            <i class="icon-left-open-big"></i>
                                        </span>
                                    </a>

                                    <a class="button button_js slider_next"
                                            href="#">
                                        <span class="button_icon">
                                            <i class="icon-right-open-big"></i>
                                        </span>
                                    </a>
                                    <div class="slider_pagination"></div>
                                </div>
                            </div>


                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <hr class="flv_margin_b_35" />
                            </div>

                            <!-- Page Title-->
                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="zoomInLeftLarge">
                                        <h2 class="title">
                                            {{__('site/mainhome.Still not sure? See our')}}
                                            <span id="thematic-websites" class="themecolor">
                                                {{__('site/mainhome.Latest Demos')}}
                                            </span>
                                        </h2>
                                        <div class="inside">
                                            <span class="big">
                                                {{__('site/mainhome.We have created 900+ layouts that')}}
                                                {{__('site/mainhome.perfectly fit to your type of business.')}}
                                                {{__('site/mainhome.Choose your product for transportation')}}
                                                {{__('site/mainhome.and installation anywhere.')}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section full-width flv_sections_3">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_offer">
                                <div class="offer">
                                    @isset($sliders)
                                    <ul class="offer_ul">
                                        @foreach($sliders as $slider)
                                        <li class="offer_li">
                                            <div class="image_wrapper">
                                                <img width="952" height="537"
                                                    src="{{$slider->photo}}"
                                                    class="scale-with-grid wp-post-image"
                                                    alt="be-photo" />
                                            </div>
                                            <div class="desc_wrapper">
                                                <div class="title">
                                                    <h3>
                                                        <span class="flv_photo_color">
                                                            {{__('site/mainhome.Be')}}|
                                                        </span>
                                                        {{__('site/mainhome.Photo')}}
                                                    </h3>

                                                    <a href="#" class="button button_js">
                                                        <span class="button_icon">
                                                            <i class="icon-layout"></i>
                                                        </span>
                                                        <span class="button_label">
                                                            {{__('site/mainhome.View Demo')}}
                                                        </span>
                                                    </a>
                                                </div>

                                                <div class="desc">
                                                    <p>
                                                        <span class="big">
                                                            {{__('site/mainhome.We have created 900+ layouts that')}}
                                                            {{__('site/mainhome.perfectly fit to your type of business.')}}
                                                            {{__('site/mainhome.Choose your product for transportation')}}
                                                            {{__('site/mainhome.and installation anywhere.')}}
                                                        </span>
                                                    </p>

                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>

                                                    <h5>
                                                        {{__('site/mainhome.Additional Offers')}}:
                                                    </h5>
                                                    <ul class="list_mixed">
                                                        <li class="list_check">
                                                            {{__('site/mainhome.Beautiful, Designs In Slider.')}}
                                                        </li>

                                                        <li class="list_star">
                                                            {{__('site/mainhome.Beautiful Designs With Images.')}}
                                                        </li>
                                                    </ul>

                                                    <div class="idea_box">
                                                        <div class="icon">
                                                            <i class="icon-lamp"></i>
                                                        </div>

                                                        <div class="desc">
                                                            {{__('site/mainhome.We Recommend This Version For Business')}}
                                                            {{__('site/mainhome.Related With Photos Or Images, Like')}}:
                                                            <strong>{{__('site/mainhome.Creative Agencies')}}</strong>,
                                                            <strong>{{__('site/mainhome.Magazines e-newspapers')}}</strong>,
                                                            <strong>{{__('site/mainhome.spa Beauty Offices')}}</strong>,
                                                            <strong>{{__('site/mainhome.Universities')}}</strong>,
                                                            <strong>{{__('site/mainhome.Language Schools')}}</strong>,
                                                            <strong>{{__('site/mainhome.Car Rents Offices, Boats')}}</strong>,
                                                            <strong>{{__('site/mainhome.Villas')}}</strong>
                                                            {{__('site/mainhome.And Other.')}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        @endforeach
                                    </ul>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section dark flv_sections_2">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_call_to_action">
                                <div class="call_to_action">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="zoomIn">
                                        <div class="call_to_action_wrapper">
                                            <div class="call_left">
                                                <h3>
                                                    {{__('site/mainhome.Watch our video tutorial')}}
                                                </h3>
                                            </div>
                                            <div class="call_center">

                                                {{-- <a href="http://www.youtube.com/watch?v=ZACc1L9oXkI"
                                                    class="prettyphoto">
                                                    <span class="icon_wrapper">
                                                        <i class="icon-play"></i>
                                                    </span>
                                                </a> --}}
                                                <a href="#"
                                                    class="prettyphoto">
                                                    <span class="icon_wrapper">
                                                        <i class="icon-play"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="call_right">
                                                <div class="desc">
                                                    {{__('site/mainhome.If you prefer to watch the video,')}}
                                                    {{__('site/mainhome.please click the icon next')}}
                                                    {{__('site/mainhome.to and watch')}}
                                                    {{__('site/mainhome."How to install, manufacture,')}}
                                                    {{__('site/mainhome.hand and machine carving"')}}
                                                    {{__('site/mainhome.with step-by-step instructions.')}}
                                                    {{__('site/mainhome.This makes us happy!')}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section dark flv_section">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Page Title-->

                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_line">
                                    <span class="slogan">
                                        {{__('site/mainhome.That is not all')}} ...
                                    </span>
                                    <h2 class="title">
                                        {{__('site/mainhome.Our Other Awesome Core Features')}}
                                    </h2>
                                </div>
                            </div>

                            <!-- One full width row-->
                            <div class="column one column_feature_list">
                                <div class="feature_list">
                                    <ul>
                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-tools"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Best Options Panel')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-cog"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Easy And Fast Builder')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-pencil"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.One click Find Us At Your Service')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-globe"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Our Product In Many Countries')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-flag"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Built-in Translator In Web')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-infinity"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Planning Future')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-code"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.400+ Samples')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-picture"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Photo Gallery Included')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-palette"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Unlimited Colors')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-docs"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.Outstanding Documentation')}}
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="icon-help"></i>
                                                    </span>
                                                    <p>
                                                        {{__('site/mainhome.And Much More')}}...
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <div class="aligncenter">
                                        <a class="button button_left button_theme button_js"
                                                href="#">
                                            <span class="button_icon">
                                                <i class="icon-heart-fa"></i>
                                            </span>
                                            <span class="button_label">
                                                {{__('site/mainhome.Typography')}}
                                            </span>
                                        </a>

                                        <a class="button button_left button_js"
                                                href="#">
                                            <span class="button_icon">
                                                <i class="icon-layout"></i>
                                            </span>
                                            <span class="button_label">
                                                {{__('site/mainhome.Boxes')}} &amp; {{__('site/mainhome.Infographics')}}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
