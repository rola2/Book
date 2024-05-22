<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $request->validate([
          'name' => 'required|string|max:255',
          'author' => 'required|string',
          'numPages' => 'required',
       ]);

        $input = $request->all();
        Book::create($request->all());

        return redirect()->route('books.index')->with('success','Book created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string',
            'numPages' => 'required',
         ]);

         $book->update($request->all());

         return redirect()->route('books.index')->with('success','Book updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('books.index')->with('success','Book deleted successfully');
    }
}