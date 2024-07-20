<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $books = Book::paginate(10);
        $books = DB::table('books')->join('categories','cate_id','=','categories.id')
                    ->select('books.*','name')->paginate(12);
        return view('books.list',compact('books'));
    }
    public function home(){
        $books = DB::table('books')->join('categories','cate_id','=','categories.id')
                    ->select('books.*','name')->limit(8)->orderByDesc('price')->get();
        return view('books.index',compact('books'));
    }
    public function detail(Request $request){
        $book = Book::query()->where('id',$request['id'])->first();
        return view('books.detail',compact('book'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
