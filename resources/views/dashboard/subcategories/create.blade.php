@extends('layouts.admin')

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Section</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href="{{route('admin.dashboard')}}"> Dashboard </a>
                            <small> Main Sections </small> -
                            <small> Add New Section </small>
                        </h2>

                        @include('dashboard.includes.alerts.success')
                        @include('dashboard.includes.alerts.errors')

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <h3>Section Data</h3>
                        <form action="{{route('admin.subcategories.store')}}" method="POST"
                              enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Image section</label>
                                <div class="col-md-6 col-sm-6 ">
                                    @error('photo')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <input type="file" id="file" name="photo">
                                </div>
                            </div>
                            <br>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">
                                    Section Name
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" value="{{old('name')}}" id="name"
                                           class="form-control"
                                           placeholder="  "
                                           name="name">
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">
                                    Slug
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" value="{{old('slug')}}"
                                           id="name" name="slug"
                                           class="form-control" placeholder="  ">
                                    @error("slug")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">
                                    Choose Main Section
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="select2_single form-control" tabindex="-1"
                                            name="parent_id">

                                        @if($categories && $categories->count() > 0)
                                            @foreach($categories as $category)
                                                <option></option>
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('parent_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" value="1"
                                                   name="is_active"
                                                   class="js-switch" checked />
                                        </label>
                                    </div>
                                    <br>
                                    @error("is_active")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button" onclick="history.back();">Reset</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

