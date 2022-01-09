@extends('layouts.admin')
@section('title', 'Sections')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> All Sections </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                                </li>

                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.sections.create')}}">
                                        Add New Section
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sections</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
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
                                    <div class="card-body card-dashboard">
                                        <table class="table display nowrap table-striped table-bordered">
                                            <thead class="">
                                            <tr>
                                                <th>Sections</th>
                                                <th>Sub Sections</th>
                                                <th>Description</th>
                                                <th>Short Description</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @isset($sections)
                                                @foreach($sections as $section)
                                                    <tr>
                                                        <td>{{$section->name}}</td>
                                                        <td>{{$section->_parent->name ?? '--'}}</td>
                                                        <td>{{$section->description}}</td>
                                                        <td>{{$section->short_description}}</td>
                                                        <td>{{$section->slug}}</td>
                                                        <td>{{$section->getActive()}}</td>
                                                        <td>
                                                            {{-- {{$section->photo}}--}}
                                                            <img style="width: 100px; height: 75px;"
                                                                 src="{{$section->photo}}">
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="{{route('admin.sections.edit', $section->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>

                                                                <a href="{{route('admin.sections.delete', $section->id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex"></div>
                                    </div>
                                </div>
                            </div>
                            {!! $sections->links() !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


@stop
