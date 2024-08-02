@extends('layout.index')
@section('banner')
    @include('layout.banner')
@endsection
@section('content')
    <div class="container mt-100">

        <div class="container mt-100">
            <div style="display: flex;justify-content: center;">
            <h1>Top 8 sản phẩm đắt giá nhất</h1>
        </div>
            <div class="flex" style="display:flex;flex-wrap:wrap;justify-content: space-between;">
                @foreach ($books as $item)
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="card mb-30" style="width:300px"><a class="card-img-tiles" href="#" data-abc="true">
                                    <div class="inner">
                                        <div class="thumblist" style="display: flex;justify-content: center;"><img
                                                src="{{ $item->thumbnail }}" height="60" width="100" alt="Category"></div>
                                    </div>
                                </a>
                                <div class="card-body text-center">
                                    <b class="card-title">{{ $item->title }}</b>
                                    <p class="text-muted">Price: <span style="color: red;">{{ $item->price }}$</span></p><a
                                        class="btn btn-outline-primary btn-sm" href="{{ route('book.detail', $item->id) }}"
                                        data-abc="true">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


{{--
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img"><img src="https://i.imgur.com/O0GMYuw.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img
                                    src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Laptops</h4>
                        <p class="text-muted">Starting from $499</p><a class="btn btn-outline-primary btn-sm" href="#"
                            data-abc="true">View Products</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img"><img src="https://i.imgur.com/uRgdVY1.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="https://i.imgur.com/VwSKS7A.jpg" alt="Category"><img
                                    src="https://i.imgur.com/gTvZ2H5.jpg" alt="Category"></div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Mobiles</h4>
                        <p class="text-muted">Starting from $50</p><a class="btn btn-outline-primary btn-sm" href="#"
                            data-abc="true">View Products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img"><img src="https://i.imgur.com/0jO40CF.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="https://i.imgur.com/dWYAg41.jpg" alt="Category"><img
                                    src="https://i.imgur.com/5oQEZSC.jpg" alt="Category"></div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Accessories</h4>
                        <p class="text-muted">Starting from $9</p><a class="btn btn-outline-primary btn-sm" href="#"
                            data-abc="true">View Products</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
