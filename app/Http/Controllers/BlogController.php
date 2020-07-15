<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class BlogController extends Controller
{
    public function index(){
    	$articles = Article::paginate(10);
    	// dd($articles);
    	return view ('/blog', ['articles' => $articles]);
    }

     public function detail($id){
    	$articles = Article::find($id);
        return view('/blogdetail',['articles' => $articles]);
}

}
