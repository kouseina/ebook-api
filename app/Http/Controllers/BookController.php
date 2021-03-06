<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // native: select * from books
        return Book::get();
        if ($book && $book->count() > 0) {
            return response(["message" => "Show data success.", "data"]);
        }else {
            return response(["message" => "Data not found.", "data"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "author"=> $request->author,
            "publisher"=> $request->publisher,
            "date_of_issue"=> $request->date_of_issue,
        ]);

        return response(["message" => "Create data success.", "data"]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
        if ($book && $book->count() > 0) {
            return response(["message" => "Show data success.", "data"]);
        }else {
            return response(["message" => "Data not found.", "data"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book-> title = $request->title;
        $book-> description = $request->description;
        $book-> author = $request->author;
        $book-> publisher= $request->publisher;
        $book-> date_of_issue= $request->date_of_issue;
        $book-> save();

        if ($book && $book->count() > 0) {
            return response(["message" => "Update data success.", "data"]);
        }else {
            return response(["message" => "Data not found.", "data"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Book::find($id)->delete();
    }
}
