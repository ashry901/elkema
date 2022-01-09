@extends('layouts.site')
@section('title', 'our projects')

@section('content')
    <br><br><br><br>

    <header class="header header-main header-sticky bg-dark">
        <div class="pb-2 py-lg-3">
            <div class="container text-light">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        @isset($sections)
                            @foreach($sections as $section)
                                <h2 class="mb-0 h4">{{$section->name}}</h2>
                            @endforeach
                        @endisset
                    </div>
                    <div class="col-lg-4 text-lg-right pt-2 pt-lg-0">
                        <ol class="breadcrumb breadcrumb-light justify-content-lg-end">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">
                                    {{__('site/mainhome.Home')}}
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{route('mainsection')}}">
                                    {{__('site/mainhome.Our Project')}}
                                </a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="divider bg-dark">
        <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
            <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
            <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
            <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
        </svg>
    </section>

    <section class="bg-white">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-5 pr-lg-5">
                    <div class="rellax rellax-move" data-rellax-speed="0.4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            @isset($sections)
                                @foreach($sections as $section)
                                    <h2 class="display-4">
                                        <b>{{$section->name}}</b>
                                        {{$section->short_description}}
                                    </h2>
                                @endforeach
                            @endisset
                            <p>{{$section->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="rellax rellax-move" data-rellax-speed="-0.3">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <div class="pt-5 pt-lg-0">
                                <img src="{{$section->photo}}"
                                     alt="..." class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop


