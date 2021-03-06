@extends('layouts.admin')
@section('title', 'Image Product')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Products Image</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.products')}}">
                                        Products
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="{{route('admin.products.general.create')}}">
                                        Add Product
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
                                    <h4 class="card-title" id="basic-layout-form">Add Image Product</h4>
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
                                                action="{{route('admin.products.images.store.db')}}"
                                                method="POST"
                                                enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="product_id" value="{{$id}}">

                                            <div class="form-body">
                                                <h4 class="form-section">
                                                    <i class="ft-home"></i>
                                                    Image Product
                                                </h4>

                                                <div class="form-group">
                                                    <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                                        <div class="dz-message">
                                                            You Can Upload More Than One Image Here
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i>Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>Save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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

@section('script')


<script>

    var uploadedDocumentMap = {}

        Dropzone.options.dpzMultipleFiles = {
            paramName: "dzfile", // The name that will be used to transfer the file
            //autoProcessQueue: false,
            maxFilesize: 5, // MB
            clickable: true,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            dictFallbackMessage: "Your Browser Does Not Support Multiple Images, Drag And Drop",
            dictInvalidFileType: "You Cannot Upload This Type Of File",
            dictCancelUpload: "Cancel The Upload",
            dictCancelUploadConfirmation: "Are You Sure To Cancel Uploading Files?",
            dictRemoveFile: "Delete Img",
            dictMaxFilesExceeded: "You Cannot Upload More Than One Image",
            headers: {
                'X-CSRF-TOKEN':
                    "{{ csrf_token() }}"
            }

            ,
            url: "{{ route('admin.products.images.store') }}", // Set the url
            success:
                function (file, response) {
                    $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                    uploadedDocumentMap[file.name] = response.name
                }
            ,
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            }
            ,
            // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
            init: function () {

                    @if(isset($event) && $event->document)
                var files =
                {!! json_encode($event->document) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
                @endif
            }
        }

</script>

@stop
