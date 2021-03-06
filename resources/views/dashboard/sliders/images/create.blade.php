@extends('layouts.admin')
@section('title', 'Image Sliders')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Dropzone</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.sliders')}}">Sliders</a>
                                </li>
                                <li class="breadcrumb-item active">Add Slider</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <section id="dropzone-examples">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Multiple Files Upload</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            {{-- {{route('admin.sliders.images.store.db')}} --}}
                                            <form class="form"
                                                  action="{{route('admin.sliders.images.store')}}"
                                                  method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf


                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="ft-home"></i>
                                                        Image Sliders
                                                    </h4>
                                                    <label class="m-2">Sliders</label>
                                                    <input type="file"
                                                           id="input-file-now-custom-3"
                                                           class="form-control m-2"
                                                           name="sliders[]" multiple>
                                                    {{--
                                                    <div class="form-group">
                                                        <div id="dpz-multiple-files"
                                                             class="dropzone dropzone-area">
                                                            <div class="dz-message">
                                                                You Can Upload More Than One Image Here
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                    --}}
                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-warning mr-1"
                                                            onclick="history.back();">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Create
                                                    </button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- Image grid -->
                <section id="image-gallery" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Image gallery</h4>
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

                    <div class="card-content">

                        <div class="card-body">
                            <div class="card-text">
                                <p>Image gallery grid with photo-swipe integration.</p>
                            </div>
                        </div>

                        <div class="card-body  my-gallery"
                             itemscope itemtype="">
                            <div class="row">

                                @isset($images)
                                    @forelse ($images as $image)

                                        <figure class="col-lg-3 col-md-6 col-12"
                                                itemprop="associatedMedia"
                                                itemscope itemtype="">
                                            <a href="{{$image->photo}}"
                                               itemprop="contentUrl"
                                               data-size="480x360">
                                                <img class="img-thumbnail img-fluid"
                                                     src="{{$image->photo}}"
                                                     itemprop="thumbnail"
                                                     alt="Image" />
                                            </a>

                                            <br><br>
                                            {{--  {{route('admin.sliders.images.delete', $image->photo)}}   --}}
                                            {{-- <a href="{{route('admin.sliders.images.delete', $image->photo)}}"--}}
                                            {{-- class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>--}}

                                        </figure>

                                    @empty
                                        No Photo
                                    @endforelse
                                @endisset


                            </div>
                        </div>

                    </div>

                </section>

            </div>


        </div>
    </div>

@stop


