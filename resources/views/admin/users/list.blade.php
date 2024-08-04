@extends('admin.dashbroard.index')
@section('content')
    <h1>Danh sách User</h1>

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
                <th scope="col">Full Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Avatar</th>
                <th scope="col">Role</th>
                <th scope="col">
                    <a href="{{ route('register') }}" class="btn btn-primary">Create new</a>
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->fullname }}</td>
                    <td>{{ $post->username }}</td>
                    <td>{{ $post->email }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $post->avatar) }}" width="50" alt="">
                    </td>
                    <td>{{ $post->role }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('admin.users.edit', $post) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.users.destroy', $post) }}" method="post">
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
    {{ $users->links() }}
@endsection
