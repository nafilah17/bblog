<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;

class ProfileController extends Controller
{
    public function index(){
     	$profiles = Profile::paginate(10);
    	return view ('admin/profile', ['profiles' => $profiles]);
    }
}
