<?php

namespace App\Http\Controllers;
// use DB;
// use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        // $articles = DB::table('articles')->get();
        // $articles = Article::get();
        return view('home');        
    }
}
