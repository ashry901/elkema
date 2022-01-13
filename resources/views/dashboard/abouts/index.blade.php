@extends('layouts.admin')
@section('title', 'abouts')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Brands</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="{{route('admin.abouts.create')}}">
                                        Add Abouts
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
                                    <h4 class="card-title">All Brands</h4>
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
                                    <div class="card-body card-dashboard">
                                        {!! $abouts->links() !!}
                                        <table class="table display nowrap table-striped table-bordered">
                                            <thead class="">
                                            <tr>
                                                {{-- <th style="width: 3%">Num.</th> --}}
                                                <th>title</th>
                                                <th>short_dis</th>
                                                <th style="width: 35%">long_dis</th>
                                                <th>Slug</th>
                                                <th style="width: 3%">Status</th>
                                                <th style="width: 15%">Img Brand</th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @isset($abouts)
                                                @foreach($abouts as $about)
                                                    <tr>
                                                        {{--  <td>{{$loop->iteration}}</td> --}}
                                                        <td>{{$about->title}}</td>
                                                        <td>{{$about->short_dis}}</td>
                                                        <td>{{$about->long_dis}}</td>
                                                        <td>{{$about->slug}}</td>
                                                        <td>{{$about->getActive()}}</td>
                                                        <td>
                                                            <img style="width: 100px; height: 75px;"
                                                                 src="{{asset('ashry/images/abouts/'.$about->photo)}}">

                                                            {{-- {{$about->photo}} --}}
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.abouts.edit', $about->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>
                                                                <a href="{{route('admin.abouts.delete', $about->id)}}"
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
                            {!! $abouts->links() !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@stop
