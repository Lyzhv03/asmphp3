@extends('layout.index')
@section('content')
    <div class="container mt-100">
        <h1 text-align="center">Chi tiết sản phẩm</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="thumblist"><img src="{{ $book->thumbnail }}" height="50" width="80"
                                        alt=""></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <b class="card-title">Tiêu đề :{{ $book->title }}</b>
                            <p class="text-muted">Giá : {{ $book->price }}.000VNĐ</p>
                            <p class="text-muted">Tác giả:{{ $book->author }}</p>
                            <p class="text-muted">Nhà xuất bản :{{ $book->publisher }}</p>
                            <p class="text-muted">Ngày xuất bản{{ $book->publication }}</p>
                            <p class="text-muted">Số lượng{{ $book->quantity }}</p>
                            <p class="text-muted">Danh mục :{{ $book->cate_id }}</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
