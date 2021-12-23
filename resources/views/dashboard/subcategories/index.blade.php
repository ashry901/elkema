@extends('layouts.admin')

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sub categories <small></small></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        @include('dashboard.includes.alerts.success')
        @include('dashboard.includes.alerts.errors')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href="{{route('admin.dashboard')}}">Dashboard</a> <small>Main Sections</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                        All Sub Category
                                    </p>
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Name Section</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Image section</th>
                                            <th>Measures</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @isset($categories)
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->_parent->name}}</td>
                                                    <td>{{$category->slug}}</td>
                                                    <td>{{$category->getActive()}}</td>
                                                    <td> <img style="width: 100px; height: 75px;" src=""></td>
                                                    <td>
                                                        <a href="{{route('admin.subcategories.edit', $category->id)}}"
                                                           class="btn btn-info btn-xs">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                        <a href="{{route('admin.subcategories.delete', $category->id)}}"
                                                           class="btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-o"></i> Delete </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @stop
