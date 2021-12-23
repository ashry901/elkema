@extends('layouts.site')
@section('title', 'sub categories')

@section('content')

<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title"></h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        Home
                    </a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>
                <li>
                    <a href="#">

                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="extra_content"></div>

            

            {{-- <div class="section">
                <div class="section_wrapper clearfix">

                    <div class="column one column_portfolio">
                        <div class="portfolio_wrapper isotope_wrapper">
                            <ul class="portfolio_group lm_wrapper isotope grid">

                                        <li class="portfolio-item isotope-item category-banner wide tall">
                                            <div class="portfolio-item-fw-bg flv_style_port_1">

                                                <div class="portfolio-item-fw-wrapper">

                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="">
                                                                <div class="mask"></div>
                                                                <img width="576" height="450"
                                                                        src=""
                                                                        class="scale-with-grid wp-post-image"
                                                                        alt="portfolio_1" />
                                                            </a>

                                                            <div class="image_links triple">
                                                                <a href=""
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
                                                                <a href="">

                                                                </a>
                                                            </h5>
                                                            <div class="button-love">
                                                                <a href="#" class="mfn-love " data-id="207">
                                                                    <span class="icons-wrapper">
                                                                        <i class="icon-heart-empty-fa"></i>
                                                                        <i class="icon-heart-fa"></i>
                                                                    </span><span class="label">173</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>
</div>

@stop
