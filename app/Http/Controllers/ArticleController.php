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

    public function add(){
    	return view('admin/addarticle');
    }

   public function insert(Request $request){
        $insert = new article;
        
        $insert->author_id = $request->author_id;
        $insert->category_id = $request->category_id;
        $insert->title = $request->title;
        $insert->content = $request->content;
        $insert->save();

        return redirect('/article');

    	
    }
}
