@extends('layout.index')
@section('content')
    <div class="container mt-100">
        <div style="display: flex;justify-content: center;">
        <h1>Trang Sản Phẩm</h1>
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
        {{ $books->links() }}
    </div>
@endsection
