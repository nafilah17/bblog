<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class ArticleController extends Controller
{
   public function index(){
     	$articles = Article::paginate(10);
    	return view ('admin/article', ['articles' => $articles]);
    }
}
