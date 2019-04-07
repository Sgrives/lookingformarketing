<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('approved', true)->orderBy('created_at', 'DESC')->get();
		return view('books/index')->withBooks($books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('books.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required',
            'category' => 'required',
            'url' => 'required',
        ));

        $book = new Book;
        $book->title = $request->title;
        $book->url = $request->url;
        $book->category_id = $request->category;
        $book->slug = $request->title;
        $delimiter = '-';
        $book->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $book->slug);
        $book->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $book->slug);
        $book->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $book->slug);
        $book->slug = strtolower(trim($book->slug, $delimiter));
        $book->slug = $book->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);
        $book->save();

        Session::flash('success', 'Book Submitted');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $book = Book::where('approved', true)->where('slug', '=', $slug)->firstOrFail();
        return view('books.show')->withBook($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
