@extends('layouts.admin')
@section('title', 'Slider Down')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">
                    Gallery Slider
                </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.sliderups.create')}}">
                                    Add Slider
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Gallery Slider
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">

            <!-- Image grid -->
            <section id="image-gallery" class="card">
                <div class="card-header">
                    <h4 class="card-title">Image gallery Slider</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                    </div>
                </div>
                @include('dashboard.includes.alerts.success')
                @include('dashboard.includes.alerts.errors')
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>Image gallery grid with photo-swipe integration.</p>
                        </div>
                    </div>

                    <div class="card-body my-gallery" itemscope itemtype="">
                        {!! $sliderups->links() !!}
                        <div class="row">
                            <table class="table display nowrap table-striped table-bordered">
                                <thead class="">
                                    <tr>
                                        <th style="width: 2%">Num.</th>
                                        <th style="width: 45%">Description</th>
                                        <th style="width: 45%">slug</th>
                                        <th style="width: 10%">Status</th>
                                        <th style="width: 15%">Img Slider</th>
                                        <th style="width: 30%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @isset($sliderups)
                                    @foreach ($sliderups as $sliderup)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                            <td>{{$sliderup->description}}</td>
                                            <td>{{$sliderup->slug}}</td>
                                            <td>
                                                {{$sliderup->getActive()}}
                                            </td>

                                            <td>
                                                {{-- {{asset('ashry/images/sliderups/'.$sliderup->picture)}} --}}
                                                <img style="width: 100px; height: 75px;"
                                                     src="{{asset('ashry/images/sliderups/'.$sliderup->picture)}}">
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                        aria-label="Basic example">

                                                    <a href="{{route('admin.sliderups.edit', $sliderup->id)}}"
                                                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>

                                                    <a href="{{route('admin.sliderups.delete', $sliderup->id)}}"
                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                            <div class="justify-content-center d-flex"></div>

                            {!! $sliderups->links() !!}
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>


@stop