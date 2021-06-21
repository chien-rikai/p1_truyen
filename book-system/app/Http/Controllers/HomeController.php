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
    
}
