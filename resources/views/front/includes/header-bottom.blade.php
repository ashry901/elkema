<div id="Top_bar">
    <div class="container">
        <div class="column one">
            <div class="top_bar_left clearfix">
                <!-- Logo-->
                <div class="logo">
                    <a id="logo" href="{{route('home')}}"
                        title="ElKemma">
                        <img class="scale-with-grid"
                                src="{{asset('ashry/front/images/marble/Logo1.png')}}"
                                alt="ElKemma" />
                    </a>
                </div>
                <!-- Main menu-->
                <div class="menu_wrapper">
                    <nav id="menu">

                        <ul id="menu-main-menu" class="menu">
                            <li id="menu-item-1354" class="current_page_item">
                                <a href="{{route('home')}}">
                                    <span>
                                        {{__('site/mainhome.Home')}}
                                    </span>
                                </a>
                            </li>

                            @isset($categories)
                            <li>
                                <a href="#">
                                    <span>
                                        {{__('site/mainhome.Shop By Products')}}
                                    </span>
                                </a>

                                <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                    @foreach($categories as $category)
                                    <li class="mfn-megamenu-cols-5">
                                        <a class="mfn-megamenu-title"
                                                href="{{route('category', $category->slug)}}">
                                            <span>
                                                {{$category->name}}
                                            </span>
                                        </a>

                                        <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                            @isset($category->childrens)
                                            @foreach($category->childrens as $childern)
                                            <li class="scroll ">
                                                <a href="{{route('category', $childern->slug )}}">
                                                    <span>
                                                        -- {{$childern->name}}
                                                    </span>
                                                </a>

                                            </li>
                                            @endforeach
                                            @endisset
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endisset

{{--                            <li>--}}
{{--                                <a href="#">--}}
{{--                                    <span>--}}
{{--                                        {{__('site/mainhome.Our Product')}}--}}
{{--                                    </span>--}}
{{--                                </a>--}}

{{--                                <ul class="sub-menu mfn-megamenu mfn-megamenu-4">--}}
{{--                                    @isset($categories)--}}
{{--                                        @foreach($categories as $category)--}}
{{--                                            <li class="mfn-megamenu-cols-4">--}}
{{--                                                <ul class="sub-menu mfn-megamenu mfn-megamenu-4">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="{{route('category', $category->slug)}}">--}}
{{--                                                            <span>--}}
{{--                                                                <i class="icon-right-thin"></i>--}}
{{--                                                                {{$category->name}}--}}
{{--                                                            </span>--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}

{{--                                                    @isset($category->childrens)--}}
{{--                                                        @foreach($category->childrens as $childern)--}}
{{--                                                            <li>--}}
{{--                                                                <a href="{{route('category', $childern->slug )}}">--}}
{{--                                                                    <span>--}}
{{--                                                                        <i class="icon-right-thin"></i>--}}
{{--                                                                        {{$childern->name}}--}}
{{--                                                                    </span>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        @endforeach--}}
{{--                                                    @endisset--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    @endisset--}}

{{--                                </ul>--}}

{{--                            </li>--}}

                            <li>
                                <a href="#">
                                    <span>{{__('site/mainhome.Categories')}}</span>
                                </a>

                                <ul class="sub-menu">
                                    @isset($categories)
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{route('category', $category->slug)}}">
                                                    <span>
                                                        {{$category->name}}
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endisset
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('about')}}">
                                    <span>
                                        <em class="themecolor">
                                            {{__('site/mainhome.About')}}
                                        </em>
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </nav>
                    <a class="responsive-menu-toggle" href="#">
                        <i class="icon-menu"></i>
                    </a>
                </div>



                <!-- Banner area - only for certain pages-->
                <div class="banner_wrapper">
                    <a href="#" target="_blank">
                        <img src="{{asset('ashry/front/images/logo/logo_footer.png')}}"
                                width="468" height="60" alt="">
                    </a>
                </div>

                <!-- Header Searchform area-->
                <div class="search_wrapper">
                    <form method="get" action="#">
                        <i class="icon_search icon-search"></i>
                        <a href="#" class="icon_close">
                            <i class="icon-cancel"></i>
                        </a>
                        <input type="text" class="field" name="s" placeholder="Enter your search" />
                        <input type="submit" class="submit flv_disp_none" value="" />
                    </form>
                </div>
            </div>

            <div class="top_bar_right">
                <div class="top_bar_right_wrapper">
                    <!-- Shopping cart icon-->
                    {{-- <a id="header_cart" href="#">
                        <i class="icon-basket"></i>
                        <span>0</span>
                    </a> --}}
                    <a id="search_button" href="#">
                        <i class="icon-search"></i>
                    </a>

                    <!--wpml flags selector-->
                    <div class="wpml-languages enabled">
                        <a class="active tooltip" href="#"
                                data-tooltip="No translations available for this page">
                            {{__('site/mainhome.Language')}}
                                <i class="icon-globe-line"></i>
                                <i class="icon-down-open-mini"></i>
                        </a>

                        <ul class="wpml-lang-dropdown">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            hreflang="{{ $localeCode }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
