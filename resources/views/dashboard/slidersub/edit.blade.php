@extends('layouts.admin')
@section('title', 'Edit Slider Down')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="card-title">Edit Slider Down</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.subsliders')}}">
                                    Sub Slider
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.subsliders.create')}}">
                                    Create New Sub Slider
                                </a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">Edit Slider Up</h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
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

                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <form class="form"
                                          action="{{route('admin.subsliders.update', $subslider->id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <input name="id" value="{{$subslider->id}}" type="hidden">

                                        <div class="form-group">
                                            <div class="text-center">
                                                <img src="{{asset('ashry/images/subsliders/'.$subslider->picture)}}"
                                                     class="rounded-circle height-250" alt="Img Brands">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Img sub Sliders</label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="picture">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('picture')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>Sliderup Info</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Title</label>
                                                        <input type="text" id="title"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="{{$subslider->title}}"
                                                               name="title">
                                                        @error("title")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Description</label>
                                                        <input type="text" id="description"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="{{$subslider->description}}"
                                                               name="description">
                                                        @error("description")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i>Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i>Ubdate
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>

@stop

