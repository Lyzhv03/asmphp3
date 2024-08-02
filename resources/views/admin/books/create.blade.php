@extends('admin.dashbroard.index')
@section('content')

    <div class="container">
        <h1>Create new post</h1>
        <form action="{{ route('admin.books.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" >
            </div>


            <!--Hình ảnh-->
            <div class="mb-3">
                <label class="form-label">thumbnail</label>
                <input class="form-control" type="file" name="thumbnail" id="fileImage"><br>
                <img id="img" src="" width="100px" alt="">
            </div>

            <div class="mb-3">
                <label class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Publication</label>
                <input type="date" class="form-control" name="publication" >
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="cate_id" class="form-select">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}">
                            {{ $cate->name }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <textarea name="author" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-b">
                <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.books.index') }}" class="btn btn-primary">List post</a>

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
