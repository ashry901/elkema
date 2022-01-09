@extends('layouts.site')
@section('title', 'About')

@section('content')

<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">{{__('site/mainhome.About')}}</h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        {{__('site/mainhome.Home')}}
                    </a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>

                <li>
                    <a href="{{route('about')}}">
                        {{__('site/mainhome.About')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section flv_sections_11">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Page Title-->
                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <h2 class="title">{{__('site/mainhome.About us')}}</h2>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_column">
                                <div class="column_attr ">
                                    <h3 class="themecolor">{{__('site/mainhome.Our Company')}}</h3>
                                    <p>
                                        <span>
                                            {{__('site/mainhome.We are Elkemma group and we love what we do.')}}
                                            {{__('site/mainhome.We are located in')}}
                                            <span class="tooltip"
                                                    data-tooltip="Mon-Fri 8:00am-6:00pm (GMT +1)" >
                                                    {{__('site/mainhome.Europe')}}
                                            </span>
                                            {{__('site/mainhome.and reply always within 24 hours.')}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_column">
                                <div class="column_attr ">
                                    <h3 class="themecolor">{{__('site/mainhome.Mission')}}</h3>
                                    <p>
                                        <span class="big">
                                            {{__('site/mainhome.Our mission is very clear - provide')}}
                                            {{__('site/mainhome.best and fully tested products')}}
                                            {{__('site/mainhome.and solutions for our customers')}}
                                        </span>
                                    </p>

                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_column">
                                <div class="column_attr ">
                                    <h3 class="themecolor">{{__('site/mainhome.Passion')}}</h3>
                                    <p>
                                        <span>
                                            {{__('site/mainhome.We love working with elkemma.')}}
                                            {{__('site/mainhome.Themes based on this traning')}}
                                            {{__('site/mainhome.gives unlimited possibilities.')}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <!-- Page devider -->
                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <hr class="flv_margin_40" />
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h2 class="flv_style_2">
                                        {{__('site/mainhome.We provide awesomness!')}}
                                    </h2>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_slider">
                                <!-- Slider Content -->
                                <div class="content_slider ">
                                    <ul class="content_slider_ul">
                                        <li class="content_slider_li_1">
                                            <a href="typography.html">
                                                <img width="890" height="470"
                                                    src="{{asset('ashry/front/images/marble/vienna-106.jpg')}}"
                                                    class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_1" />
                                            </a>
                                        </li>

                                        <li class="content_slider_li_2">
                                            <a href="boxes-infographics.html">
                                                <img width="890" height="470"
                                                    src="{{asset('ashry/front/images/marble/vienna-106.jpg')}}"
                                                    class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_2" />
                                            </a>
                                        </li>

                                        <li class="content_slider_li_3">
                                            <a href="content-blocks.html">
                                                <img width="890" height="470"
                                                    src="{{asset('ashry/front/images/marble/vienna-106.jpg')}}"
                                                    class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_3" />
                                            </a>
                                        </li>

                                        <li class="content_slider_li_4">
                                            <a href="content-elements.html">
                                                <img width="890" height="470"
                                                    src="{{asset('ashry/front/images/marble/vienna-106.jpg')}}"
                                                    class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_4" />
                                            </a>
                                        </li>
                                        <li class="content_slider_li_5">
                                            <a href="loops.html">
                                                <img width="890" height="470"
                                                    src="{{asset('ashry/front/images/marble/vienna-106.jpg')}}"
                                                    class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_5" />
                                            </a>
                                        </li>
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
                        </div>
                    </div>
                </div>
                <div class="section highlight-left dark flv_sections_12">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second column_column">
                                <div class="column_attr ">
                                    <div class="flv_style_1">
                                        <h2>
                                            {{__('site/mainhome.Premium awards')}}
                                        </h2>
                                        <p>
                                            <span class="big">
                                                {{__('site/mainhome.Our product are always fully')}}
                                                {{__('site/mainhome.tested by users so you can be')}}
                                                {{__('site/mainhome.sure you always purchase')}}
                                                {{__('site/mainhome.fully valuable products.')}}
                                            </span>
                                        </p>
                                        <a class="button button_left button_js"
                                                href="#"
                                                target="_blank">
                                            <span class="button_icon">
                                                <i class="icon-link"></i>
                                            </span>
                                            <span class="button_label">
                                                {{__('site/mainhome.Check our badges')}}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second column_image">
                                <div class="image_frame no_link scale-with-grid no_border alignleft">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid"
                                                width="496" height="240"
                                                src="{{asset('ashry/front/images/marble/stone-665.jpg')}}"
                                                alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section flv_sections_13">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <div class="number" data-to="35">
                                        0
                                    </div>
                                    <h3 class="title">
                                        {{__('site/mainhome.Countries')}}
                                    </h3>
                                    <hr class="hr_narrow" />
                                    <div class="desc">


                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <div class="number" data-to="142">
                                        0
                                    </div>
                                    <h3 class="title">{{__('site/mainhome.Articles')}}</h3>
                                    <hr class="hr_narrow" />
                                    <div class="desc">
                                        {{-- {{__('site/mainhome.About')}} --}}
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <div class="number" data-to="999">
                                        0
                                    </div>
                                    <h3 class="title">{{__('site/mainhome.Projects')}}</h3>
                                    <hr class="hr_narrow" />
                                    <div class="desc">
                                        {{-- {{__('site/mainhome.About')}} --}}
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_quick_fact">
                                <!-- Counter area-->
                                <div class="quick_fact animate-math">
                                    <div class="number" data-to="25">
                                        0
                                    </div>
                                    <h3 class="title">{{__('site/mainhome.Years Of Experience')}}</h3>
                                    <hr class="hr_narrow" />
                                    <div class="desc">

                                    </div>
                                </div>
                            </div>
                            <!-- Page devider -->
                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <hr class="flv_margin_40" />
                            </div>
                            <div class="column one column_divider">
                                <hr class="flv_style_3" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

