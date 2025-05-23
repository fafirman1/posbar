@extends('layouts.app')

@section('title', 'Products')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                {{-- <h1>Products</h1>
                <div class="section-header-button">
                    <a href="{{route('product.create')}}"
                        class="btn btn-primary">Add New</a>
                </div> --}}
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Products</a></div>
                    <div class="breadcrumb-item">All Products</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                {{-- <h2 class="section-title">Products</h2>
                <p class="section-lead">
                    You can manage all Products, such as editing, deleting and more.
                </p> --}}


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="cardtable">
                            <div class="card-header" style="display: flex; align-items: center;">
                                <span class="total-users" style="margin-left: 10px;">Total Product: {{ $products->total() }}</span>
                                <div class="section-header-button" style="margin-left: auto;">
                                    <a href="{{route('product.create')}}"
                                        class="btn btn-primary" style="padding: 5px 20px; border-radius: 30px;">+ Add New</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{route('product.index')}}">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search"
                                                name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                @if ($product->image)
                                                <img
                                                    src="{{asset('storage/products/'.$product->image)}}"
                                                    alt=""
                                                    width="100px"
                                                    class=""
                                                    style="
                                                        width: 100px;
                                                        height: 100px;
                                                        object-fit: cover;
                                                        border-radius: 5px;
                                                        margin: 5px 0px"
                                                >
                                                @else
                                                <span class="badge badge-danger">No image</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{$product->name}}
                                            </td>
                                            <td>
                                                {{$product->category}}
                                            </td>
                                            <td>
                                                {{$product->stock}}
                                            </td>
                                            <td>
                                                Rp. {{ number_format($product->price, 0, ',', '.') }}
                                            </td>

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href='{{route('product.edit', $product->id)}}'
                                                        class="btn btn-sm btn-info btn-icon">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <form action="{{route('product.destroy', $product->id)}}" method="POST"
                                                        class="ml-2">
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                        <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                            <i class="fas fa-times"></i>
                                                            Delete
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{$products->withQueryString()->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
