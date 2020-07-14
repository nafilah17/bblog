<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoriesController extends Controller
{
     public function index(){
     	$categories = Category::paginate(10);
    	return view ('admin/category', ['categories' => $categories]);
    }

    public function add(){
    	return view('admin/addcategory');
    }

    public function insert(Request $request){
    	$insert = new category;
    	$insert->id = $request->id;
    	$insert->name = $request->name;
    	$insert->save();

    	return redirect('/category');
    }
    public function edit($id){
    	$categories = Category::find($id);
    	return view('admin/category', ['categories' => $categories]);
    }


    public function update($id, Request $request){

    	$update = App\Category::find($id);
    	$update->id = $request->id;
    	$update->name = $request->name;
    	$update->save();

    	return redirect('/category');

    }

    public function delete($id){
    	$category = Category::find($id);
    	$category->delete();
    	return redirect('/category');
    }
}
