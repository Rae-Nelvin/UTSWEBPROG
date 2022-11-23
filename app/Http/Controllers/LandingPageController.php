<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Publisher;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $books = Book::all()->take(8);
        return view('welcome', compact('books'));
    }

    /**
     * bookDetail
     *
     * @param  mixed $id
     * @return void
     */
    public function bookDetail($id)
    {
        $book = Book::where('id', $id)->with('bookCategories.categories')->first();
        return view('book-detail', compact('book'));
    }

    /**
     * bookCategory
     *
     * @param  mixed $category
     * @return void
     */
    public function bookCategory($category)
    {
        $books = BookCategory::with('books')->where('category_id', $category)->get();
        return view('book-category', compact('books'));
    }

    /**
     * publisher
     *
     * @return void
     */
    public function publisher()
    {
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    /**
     * publisherDetail
     *
     * @param  mixed $id
     * @return void
     */
    public function publisherDetail($id)
    {
        $publisher = Publisher::where('id', $id)->with('books')->first();
        return view('publisher-detail', compact('publisher'));
    }

    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('contact');
    }
}
