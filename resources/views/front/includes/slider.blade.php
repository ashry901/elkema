<div class="mfn-main-slider" id="mfn-rev-slider">
    <div id="rev_slider_34_2_wrapper"
            class="rev_slider_wrapper fullwidthbanner-container flv_rev_14">
        <div id="rev_slider_34_2" class="rev_slider fullwidthabanner flv_rev_13">
            <ul>
                @isset($sliders)
                    @foreach($sliders as $slider)
                        <li data-transition="fade"
                                data-slotamount="7"
                                data-masterspeed="300"
                                data-thumb="{{$slider->photo}}"
                                data-saveperformance="off">

                            <img src="{{$slider->photo}}"
                                    alt="slide-home-bg"
                                    data-bgposition="center top"
                                    data-bgfit="cover"
                                    data-bgrepeat="no-repeat">

                        </li>
                    @endforeach
                @endisset

                <div class="tp-caption customin flv_rev_14"
                            data-x="center"
                            data-hoffset="300"
                            data-y="center"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;
                                            rotationZ:0;scaleX:0;scaleY:0;
                                            skewX:0;skewY:0;opacity:1;
                                            transformPerspective:600;
                                            transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="easeOutBack"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300">

                    @isset($sliders)
                        @foreach($sliders as $slider)
                            <img src="{{$slider->photo}}" alt="...">
                        @endforeach
                    @endisset
                </div>

            </ul>
            <div class="tp-bannertimer tp-bottom flv_vis_hid"></div>
        </div>
    </div>
</div>

