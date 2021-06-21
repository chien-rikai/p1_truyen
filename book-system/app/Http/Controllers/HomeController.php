<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    
    public function changeLanguage($language)
    {
        App::setLocale($language);
        Session::put('website_language', $language);
       // dd(Session::all());
        return redirect()->back();
    }
    public function getBook()
    {
        $books = Book::Orderby('id','ASC')->get();
        return view('user.list',compact('books'));
    }
    public function getBookById($id)
    {
        $books = Book::where('id',$id)->first();
        return view('user.detail-book',compact('books'));
    }
    
}
