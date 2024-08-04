<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->limit(10)->orderByDesc('id')->paginate(10);
        return view('admin.users.list', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $post)
    {
        return view('admin.users.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $post)
    {
        $data = $request->except('avatar');

        $old_image = $post->avatar;
        //Neu ko cap nhat anh
        $data['avatar'] = $old_image;
        //new  cap nhat anh
        if($request->hasFile('avatar')){
            $path_image = $request->file('avatar')->store('images');
            $data['avatar'] = $path_image;
        }
        // luu vao db
        $post -> update($data);
        //Xoa anh cu
        if(isset($path_image)){
            if(file_exists('storage/' . $old_image)){
                unlink('storage/' .$old_image);
            }
        }

        return redirect()->back()->with('message','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $post)
    {
        $post->delete();
        return redirect()->route('admin.users.index')->with('message', 'Xóa dữ liệu thành công');
    }
}
