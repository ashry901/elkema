@extends('layouts.admin')
@section('title', 'Product')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Products</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.products.general.create')}}">
                                    Add New Products
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Main Section</li>
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
                                <h4 class="card-title">All Main Category</h4>
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
                                    {!! $products->links() !!}
                                    <table class="table display nowrap table-striped table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @isset($products)
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->slug}}</td>
                                                    <td>{{$product->getActive()}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                                aria-label="Basic example">
                                                            <a href="{{route('admin.products.price', $product->id)}}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Price</a>

                                                            <a href="{{route('admin.products.images', $product->id)}}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Img</a>

                                                            <a href="{{route('admin.products.stock', $product->id)}}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Stock</a>

                                                        </div>

                                                        <a href="{{route('admin.products.general.edit', $product->id)}}"
                                                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>

                                                        <a href="{{route('admin.products.delete', $product->id)}}"
                                                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                            Delete
                                                        </a>
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
                    </div>
                </div>
                {!! $products->links() !!}
            </section>
        </div>
    </div>
</div>

    @stop
