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
    	$this->validate($request, [
    		'id'		=> 'required',
    		'name' 	=> 'required'
    	]);

    	Category::create([
    		'id' => $request->id,
    		'name' => $request->name ]);

    	return redirect('category');
}
