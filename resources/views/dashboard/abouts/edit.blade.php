@extends('layouts.admin')
@section('title', 'edit abouts')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.abouts')}}">abouts</a>
                                </li>

                                <li class="breadcrumb-item active">
                                    <a href="{{route('admin.abouts.create')}}">
                                        Add New abouts
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
                                    <h4 class="card-title" id="basic-layout-form">Edit abouts</h4>
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
                                              action="{{route('admin.abouts.update', $about->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{$about->id}}" type="hidden">

                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{asset('ashry/images/abouts/'.$about->photo)}}"
                                                         class="rounded-circle height-250" alt="Img Brands">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Img Brands</label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section">
                                                    <i class="ft-home"></i>
                                                    abouts Info
                                                </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">title</label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   value="{{$about->title}}"
                                                                   name="title">
                                                            @error("title")
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">short_dis</label>
                                                            <input type="text" id="short_dis"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   value="{{$about->short_dis}}"
                                                                   name="short_dis">
                                                            @error("short_dis")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">long_dis</label>
                                                            <input type="text" id="long_dis"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   value="{{$about->long_dis}}"
                                                                   name="long_dis">
                                                            @error("long_dis")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Slug</label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   value="{{$about->slug}}"
                                                                   name="slug">
                                                            @error("slug")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1"
                                                                   name="is_active"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   @if($about->is_active == 1)checked @endif />
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">Status</label>

                                                            @error("is_active")
                                                            <span class="text-danger">{{$message }}</span>
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
