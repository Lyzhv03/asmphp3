<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function index($id){
        $cate = Book::query()->where('cate_id',$id)->get();
        return view('categories.index',compact('cate'));
    }
}
