@extends('layouts.admin')

@section('title', 'Image Sliders')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Slider Create</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="">Sliders</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Inputs Validation</h4>
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

                            <div class="card-content collapse show">

                                <div class="card-body">
                                    <p>Add novalidate attribute to form tag.</p>
                                    <form class="form"
                                            action="{{route('admin.sliders.store')}}"
                                            method="POST"
                                            enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Img Brandes</label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="photo">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    @error('photo')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group mt-1">
                                                    <input type="checkbox" value="1"
                                                            name="is_active"
                                                            id="switcheryColor4"
                                                            class="switchery" data-color="success"
                                                            checked/>
                                                    <label for="switcheryColor4"
                                                            class="card-title ml-1">Status</label>
                                                    @error("is_active")
                                                        <span class="text-danger">{{$message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-warning mr-1"
                                                            onclick="history.back();">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@stop

{{-- @section('script')



@stop --}}
