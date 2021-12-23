@extends('layouts.site')
@section('title', 'Products')

@section('slider')
<div class="banner_wrapper">

    <img src="{{asset('ashry/front/images/marble/stone-2929.jpg')}}"
            width="1500" height="260" alt="...">

</div>
@stop

@section('content')

    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h2 class="title">{{$category->name}}</h2>
                <!--BreadCrumbs area-->

                <a href="{{route('category', $category->slug)}}">
                    {{$category->name}}
                </a>
                <span>
                    <i class="icon-right-open"></i>
                </span>


                @isset($category->childrens)
                    @foreach($category->childrens as $childern)

                        <a href="{{route('category', $childern->slug )}}">
                            {{$childern->name}}
                        </a>
                        <span>
                            <i class="icon-right-open"></i>
                        </span>

                    @endforeach
                @endisset

                <a href="{{route('home')}}">
                    {{__('site/mainhome.Home')}}
                </a>


            </div>
        </div>
    </div>

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="extra_content">

                </div>


                <div class="section">
                    <div class="section_wrapper clearfix">
                        <div class="column one column_portfolio">
                            <div class="portfolio_wrapper isotope_wrapper">
                                <ul class="portfolio_group lm_wrapper isotope grid col-4">

                                    @isset($products)
                                    @foreach($products as $product)

                                    <li class="portfolio-item isotope-item category-banner ">
                                        <div class="portfolio-item-fw-bg flv_style_port_4">
                                            <div class="portfolio-item-fw-wrapper">

                                                <div class="image_frame scale-with-grid">
                                                    <div class="image_wrapper">
                                                        <a href="{{route('product.details',$product->slug)}}">
                                                            <div class="mask"></div>
                                                            <img width="576" height="450"
                                                                src="{{$product->images[0]->photo ?? ''}}"
                                                                class="scale-with-grid wp-post-image"
                                                                alt="..." />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a href="{{$product->images[0]->photo ?? ''}}"
                                                                class="zoom" rel="prettyphoto">
                                                                <i class="icon-search"></i>
                                                            </a>
                                                            <a href="{{route('product.details', $product->slug)}}" class="link">
                                                                <i class="icon-link"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <div class="title_wrapper">
                                                        <h5 class="entry-title">
                                                            <a href="{{route('product.details',$product->slug)}}">
                                                                {{$product->name}}
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
            </div>
        </div>
    </div>

@stop


