<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        
        // dd($request->ip());
        $news = News::latest()->take(1)->get();
        $blogs = Blog::take(4)->get();
  
        return view('index',compact('news','blogs'));
    }

    public function foregin()
    {
        return view('index');
    }
}
