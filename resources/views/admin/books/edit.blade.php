@extends('admin.dashbroard.index')
@section('content')

    <div class="container">
        <h1>Edit Book</h1>
        <a href="{{ route('admin.books.index') }}" class="btn btn-primary">List post</a>
        <form action="{{ route('admin.books.edit',$post) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>

            <!--Hình ảnh-->
            <div class="mb-3">
                <label class="form-label">thumbnail</label>
                <input class="form-control" type="file" name="thumbnail" id="fileImage"><br>
                <img id="img" src="{{asset('storage/'. $post->image)}}" width="100px" alt="">
            </div>

            <div class="mb-3">
                <label class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" value="{{$post->publisher}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Publication</label>
                <input type="date" class="form-control" name="publication" value="{{$post->publication}}">
            </div>



            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" value="{{$post->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{$post->quantity}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="cate_id" class="form-select">
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}" @if ($item->id === $post->cate_id) selected @endif>
                        {{ $item->name }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-b">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script>
        var fileImage = document.querySelector('#fileImage')
        var img = document.querySelector('#img');

        fileImage.addEventListener('change',function(e){
            e.preventDefault()
            img.src = URL.createObjectURL(this.files[0])
        })
    </script>
@endsection
