@extends('layouts.site')
@section('title', 'portfolio')

{{--@section('slider')--}}
{{--<div class="banner_wrapper">--}}

{{--    <img src="{{asset('ashry/front/images/marble/stone-2929.jpg')}}"--}}
{{--            width="1500" height="260" alt="...">--}}

{{--</div>--}}
{{--@stop--}}

@section('content')
    <!--Subheader area - only for certain pages -->
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">{{__('site/mainhome.Products')}}</h1>
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
                        <a href="{{route('portfolio')}}">
                            {{__('site/mainhome.Products')}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- Main Content -->
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="extra_content">

            </div>
            <!-- Portfolio filters -->
            <div class="section section-filters">
                <div class="section_wrapper clearfix">
                    <!--  Filter Area -->
                    <div id="Filters" class="column one isotope-filters">
                        <ul class="filters_buttons">
                            <li class="label">
                                {{__('site/mainhome.Filter by')}}
                            </li>
                            <li class="categories">
                                <a class="open" href="#">
                                    <i class="icon-docs"></i>
                                    {{__('site/mainhome.Categories')}}
                                    <i class="icon-down-dir"></i>
                                </a>
                            </li>
                            <li class="reset">
                                <a class="close" data-rel="*"
                                    href="portfolio-full-filtering.html">
                                    <i class="icon-cancel"></i>
                                    {{__('site/mainhome.Show all')}}
                                </a>
                            </li>
                        </ul>

                        <div class="filters_wrapper">
                            <ul class="categories">
                                <li>
                                    <a data-rel=".category-artwork" href="#">
                                        {{__('site/mainhome.Artwork')}}
                                    </a>
                                </li>

                                <li>
                                    <a data-rel=".category-banner" href="#">
                                        {{__('site/mainhome.Banner')}}
                                    </a>
                                </li>
                                <li>
                                    <a data-rel=".category-beauty" href="#">
                                        {{__('site/mainhome.Beauty')}}
                                    </a>
                                </li>
                                <li>
                                    <a data-rel=".category-design-2" href="#">
                                        {{__('site/mainhome.Design')}}
                                    </a>
                                </li>
                                <li>
                                    <a data-rel=".category-marketing" href="#">
                                        {{__('site/mainhome.Marketing')}}
                                    </a>
                                </li>
                                <li>
                                    <a data-rel=".category-mechanic" href="#">
                                        {{__('site/mainhome.Mechanic')}}
                                    </a>
                                </li>
                                <li class="close">
                                    <a href="#">
                                        <i class="icon-cancel"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section_wrapper clearfix">

                    <!-- One full width row-->
                    <div class="column one column_portfolio">
                        <div class="portfolio_wrapper isotope_wrapper">
                            <ul class="portfolio_group lm_wrapper isotope grid">

                                <li class="portfolio-item isotope-item category-banner ">
                                    <div class="portfolio-item-fw-bg flv_style_port_4">
                                        <div class="portfolio-item-fw-wrapper">

                                            <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="#">
                                                        <div class="mask"></div>
                                                        <img width="576" height="450"
                                                            src="{{asset('ashry/front/images/marble/max-vakhtbovych-2.jpg')}}"
                                                            class="scale-with-grid wp-post-image" alt="portfolio_4" />
                                                    </a>
                                                    <div class="image_links double">
                                                        <a href="{{asset('ashry/front/images/marble/max-vakhtbovych-2.jpg')}}"
                                                            class="zoom" rel="prettyphoto">
                                                            <i class="icon-search"></i>
                                                        </a>
                                                            <a href="#" class="link">
                                                                <i class="icon-link"></i>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <div class="title_wrapper">
                                                    <h5 class="entry-title">
                                                        <a href="#">
                                                            Marble
                                                        </a>
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="portfolio-item isotope-item category-banner ">
                                    <div class="portfolio-item-fw-bg flv_style_port_4">
                                        <div class="portfolio-item-fw-wrapper">

                                            <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="#">
                                                        <div class="mask"></div>
                                                        <img width="576" height="450"
                                                            src="{{asset('ashry/front/images/marble/max-vakhtbovych-2.jpg')}}"
                                                            class="scale-with-grid wp-post-image" alt="portfolio_4" />
                                                    </a>
                                                    <div class="image_links double">
                                                        <a href="{{asset('ashry/front/images/marble/max-vakhtbovych-2.jpg')}}"
                                                            class="zoom" rel="prettyphoto">
                                                            <i class="icon-search"></i>
                                                        </a>
                                                            <a href="#" class="link">
                                                                <i class="icon-link"></i>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <div class="title_wrapper">
                                                    <h5 class="entry-title">
                                                        <a href="#">
                                                            Sculpture
                                                        </a>
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="portfolio-item isotope-item category-banner ">
                                    <div class="portfolio-item-fw-bg flv_style_port_4">
                                        <div class="portfolio-item-fw-wrapper">

                                            <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="#">
                                                        <div class="mask"></div>
                                                        <img width="576" height="450"
                                                            src="{{asset('ashry/front/images/marble/max-vakhtbovych-2.jpg')}}"
                                                            class="scale-with-grid wp-post-image" alt="portfolio_4" />
                                                    </a>
                                                    <div class="image_links double">
                                                        <a href="{{asset('ashry/front/images/marble/max-vakhtbovych-2.jpg')}}"
                                                            class="zoom" rel="prettyphoto">
                                                            <i class="icon-search"></i>
                                                        </a>
                                                            <a href="#" class="link">
                                                                <i class="icon-link"></i>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <div class="title_wrapper">
                                                    <h5 class="entry-title">
                                                        <a href="#">Granite</a>
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop

