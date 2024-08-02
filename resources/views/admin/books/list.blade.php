@extends('admin.dashbroard.index')
@section('content')


    <h1>Danh sách bài viết</h1>

    {{-- @auth
        <div class="">
            Username : {{Auth::user()->username}}
            <a href="{{route('logout')}}">Logout</a>
        </div>
    @endauth --}}
    @if (session('message'))
        <div class="alert alert-success ">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Publication</th>
                <th scope="col">Price</th>
                <th scope="col">Quatity</th>
                <th scope="col">Cate Name</th>
                <th scope="col">
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Create new</a>
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" width="50" alt="">
                    </td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->publisher }}</td>
                    <td>{{ $post->publication }}</td>
                    <td>{{ $post->price }}</td>
                    <td>{{ $post->quantity }}</td>
                    <td>{{ $post->name }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('admin.books.edit', $post) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.books.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Bạn có muốn xóa không?')" type="submit"
                                class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $books->links() }}
 @endsection
