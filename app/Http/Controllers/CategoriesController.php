<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categories;

class CategoriesController extends Controller
{
     public function index(){
     	$categories = Categories::paginate(10);
    	return view ('admin/categories', ['categories' => $categories]);
    }
}
