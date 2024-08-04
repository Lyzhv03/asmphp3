@extends('admin.dashbroard.index')
@section('content')

    <div class="container">
        <h1>Edit User</h1>
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">List User</a>
        <form action="{{ route('admin.users.edit',$post) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" value="{{$post->fullname}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="{{$post->username}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{$post->email}}">
            </div>

            <!--Hình ảnh-->
            <div class="mb-3">
                <label class="form-label">Avatar</label>
                <input class="form-control" type="file" name="avatar" id="fileImage"><br>
                <img id="img" src="{{asset('storage/'. $post->image)}}" width="100px" alt="">
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option >Admin</option>
                    <option >User</option>
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
