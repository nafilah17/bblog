<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class ArticleController extends Controller
{
   public function index(){
     	$articles = Article::all();
            return view ('admin/article', ['articles' => $articles]);
         //dd($articles);
    }

    public function add(){
    	return view('admin/addarticle');
    }

   public function insert(Request $request){
        $insert                 = new article;
        $insert->author_id      = $request->author_id;
        $insert->category_id    = $request->category_id;
        $insert->title          = $request->title;
        $insert->content        = $request->content;
        $insert->save();

        return redirect('/article');
    }

    public function edit($id){
        $articles = Article::find($id);
        return view('admin/editarticle',['articles' => $articles]);
    }

    public function update(Request $request, $id){
        $update                 = Article::find($id);
        $update->author_id      = $request->author_id;
        $update->category_id    = $request->category_id;
        $update->title          = $request->title;
        $update->content        = $request->content;
        $update->save();

        return redirect('/article');
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/article');
    }
}
