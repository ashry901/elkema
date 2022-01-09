@extends('layouts.site')
@section('title', 'Products details')

{{--@section('slider')--}}
{{--<div class="banner_wrapper">--}}

{{--    <img src="{{asset('ashry/front/images/marble/stone-2929.jpg')}}"--}}
{{--            width="1500" height="260" alt="...">--}}

{{--</div>--}}
{{--@stop--}}

@section('content')

    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">{{$product->name}}</h1>

                <a href="{{route('home')}}">
                    {{__('site/mainhome.Home')}}
                </a>
                <span><i class="icon-right-open"></i></span>


                @isset($product->categories)
                    @foreach($product->categories as $category )

                        <a href="{{route('category', $category->slug)}}">
                            {{$category->name}}
                        </a>
                        <span><i class="icon-right-open"></i></span>

                    @endforeach
                @endisset


                <a href="{{route('product.details',$product->slug)}}">
                    {{$product->name}}
                </a>
            </div>
        </div>
    </div>

                    {{--
                    single
                    single-product
                    postid-70
                    woocommerce
                    woocommerce-page
                    with_aside aside_right
                    color-blue
                    layout-full-width
                    header-modern
                    sticky-header
                    sticky-white
                    subheader-title-left
                    --}}
    <div id="Content">
        <div class="content_wrapper clearfix single
                    single-product
                    postid-70
                    woocommerce
                    woocommerce-page
                    with_aside aside_right">

            <div class="sections_group">
                <div class="section">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one woocommerce-content">
                                <div itemscope itemtype="http://schema.org/Product"
                                        id="product-70"
                                        class="post-70 product type-product has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-cat-posters instock">

                                    <div class="product_wrapper clearfix">

                                        <div class="column one-second product_image_wrapper">
                                            <div class="image_frame scale-with-grid">
                                                <span class="onsale">
                                                    <i class="icon-star"></i>
                                                </span>

                                                @isset($product->images)
                                                <div class="images image_wrapper">
                                                    <a href="{{$product->images[0] -> photo ?? ''}}"
                                                            class="woocommerce-main-image zoom"
                                                            title="poster_2_up"
                                                            data-rel="prettyPhoto[product-gallery]">
                                                        <div class="mask"></div>
                                                        <img width="500" height="500"
                                                            src="{{$product->images[0] -> photo ?? ''}}"
                                                            class="scale-with-grid wp-post-image"
                                                            alt="poster_2_up"
                                                            title="poster_2_up" />
                                                    </a>
                                                    @foreach($product->images as $image)
                                                    <div class="image_links">
                                                        <a href="{{$image->photo}}"
                                                            class="woocommerce-main-image zoom"
                                                            title="poster_2_up">
                                                            <i class="icon-search"></i>
                                                        </a>
                                                    </div>

                                                    @endforeach
                                                </div>

                                                @endisset
                                            </div>
                                            <div class="thumbnails columns-3"></div>
                                        </div>

                                        <div class="column one-second summary entry-summary">
                                            <h1 class="product_title entry-title">
                                                {{$product->name}}
                                            </h1>

                                            <div itemscope itemtype="">
                                                <p class="price">
                                                    {{$product -> in_stock ? 'in stock' : 'out of stock'}}
                                                </p>
                                            </div>
                                            <br class="flv_style_25" />
                                            <div>
                                                <p>
                                                    {!! $product->short_description  !!}
                                                </p>
                                            </div>

                                            <div class="accordion">
                                                <div class="mfn-acc accordion_wrapper open1st">
                                                    <div class="question">
                                                        <div class="title">
                                                            <i class="icon-plus acc-icon-plus"></i>
                                                            <i class="icon-minus acc-icon-minus"></i>
                                                            Description
                                                        </div>

                                                        <div class="answer">
                                                            <p>
                                                                {!! $product->description  !!}
                                                            </p>
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
                </div>


            </div>



        </div>
    </div>

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section flv_sections_30">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second column_column">
                                    <div class="column_attr ">
                                        <div class="flv_style_39">
                                            <h2 class="themecolor">
                                                {!! $product->description  !!}
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                                <!-- One Second (1/2) Column -->

                                <div class="column one-second column_column">
                                    <div class="column_attr ">

                                        <!-- Image Gallery-->
                                        <div id='gallery-2' class='gallery galleryid-622 gallery-columns-3 gallery-size-thumbnail '>
                                            <!-- Gallery item -->
                                            @foreach($product->images as $image)
                                            <dl class='gallery-item'>

                                                <dt class='gallery-icon landscape'>

                                                    <a href='{{$image->photo}}'>
                                                        <img width="300" height="300"
                                                             src="{{$image->photo}}"
                                                             class="attachment-thumbnail"
                                                             alt="..." />
                                                    </a>

                                                </dt>

                                                <dd></dd>
                                            </dl>
                                            @endforeach
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



