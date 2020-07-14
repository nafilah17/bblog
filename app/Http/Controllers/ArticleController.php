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
    	$this->validate($request, [
    		'author_id'		=> 'required',
    		'category_id' 	=> 'required',
    		'title'			=> 'required',
    		'content' 		=> 'required',
    		'created_at' 	=> 'required',
    		'updated_at' 	=> 'required'
    	]);

    	Article::create($request->all());

    	return redirect('/article');

    }
}
