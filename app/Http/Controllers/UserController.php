<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->limit(10)->orderByDesc('id')->paginate(10);
        return view('admin.books.list', compact('books'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

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
    public function edit(Book $post)
    {
        $categories = Category::all();
        return view('admin.books.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $post)
    {
        $data = $request->except('thumbnail');

        $old_image = $post->image;
        //Neu ko cap nhat anh
        $data['thumbnail'] = $old_image;
        //new  cap nhat anh
        if($request->hasFile('thumbnail')){
            $path_image = $request->file('thumbnail')->store('images');
            $data['thumbnail'] = $path_image;
        }
        // luu vao db
        $post -> update($data);
        //Xoa anh cu
        if(isset($path_image)){
            if(file_exists('storage/' . $old_image)){
                unlink('storage/' .$old_image);
            }
        }

        return redirect()->back()->with('message','cap nhat thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $post)
    {
        $post->delete();
        return redirect()->route('admin.books.index')->with('message', 'Xóa dữ liệu thành công');
    }
}
