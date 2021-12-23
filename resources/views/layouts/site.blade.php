<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link href="{{asset('ashry/front/images/favicon.png')}}" rel="shortcut icon">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='{{asset('ashry/front/css/global.css')}}'>
    <link rel='stylesheet' href='{{asset('ashry/front/css/structure.css')}}'>
    <link rel='stylesheet' id='style-static' href='{{asset('ashry/front/css/be_style.css')}}'>
    <link rel='stylesheet' href='{{asset('ashry/front/css/custom.css')}}'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('ashry/front/plugins/rs-plugin/css/settings.css')}}">

    @yield('styles')
</head>

{{-- <body class="color-blue layout-full-width header-modern sticky-header sticky-white with_aside aside_right subheader-title-left"> --}}

<body class="color-blue layout-full-width header-modern sticky-header sticky-white subheader-title-left">


    <!-- Hidden Top Area -->
    @include('front.includes.header-top')

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header">
                <!-- Header Top -  Info Area headerinfo-->
                @include('front.includes.headerinfo')

                <!-- Header bottom -  Logo and Menu area -->
                @include('front.includes.header-bottom')
                {{-- @yield('header') --}}
                {{-- @include('front.includes.subheader') --}}
                <!-- Revolution slider area-->
                @yield('slider')
            </header>
        </div>

        <!-- Main Content -->
        @yield('content')

        <!-- Footer-->
        @include('front.includes.footer')

    </div>

    <!-- Popup contact form -->
{{--    @include('front.includes.popup')--}}

    <!-- JS -->

    <script src="{{asset('ashry/front/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('ashry/front/js/mfn.menu.js')}}"></script>
    <script src="{{asset('ashry/front/js/jquery.plugins.js')}}"></script>
    <script src="{{asset('ashry/front/js/jquery.jplayer.min.js')}}"></script>
    <script src="{{asset('ashry/front/js/animations/animations.js')}}"></script>
    <script src="{{asset('ashry/front/js/email.js')}}"></script>
    <script src="{{asset('ashry/front/js/scripts.js')}}"></script>


    <script src="{{asset('ashry/front/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi34;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_34_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_34_2");
            } else {
                revapi34 = tpj("#rev_slider_34_2").show().revolution({
                    sliderType: "standard",

                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 7000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 90,
                                v_offset: 40
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 40,
                                v_offset: 40
                            }
                        },
                        thumbnails: {
                            style: "hesperiden",
                            enable: true,
                            width: 200,
                            height: 80,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "transparent",
                            wrapper_opacity: "1",
                            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">Slide</span>',
                            visibleAmount: 3,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 40,
                            v_offset: 40
                        }
                    },
                    gridwidth: 1180,
                    gridheight: 750,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "on",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
    </script>

    <script>
        jQuery(window).load(function () {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "ashry/front/images/marble/Logo1.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>

    @yield('scripts')

</body>

</html>
