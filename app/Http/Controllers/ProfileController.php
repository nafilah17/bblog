<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profiles;

class ProfileController extends Controller
{
    public function index(){
     	$profiles = Profiles::paginate(10);
    	return view ('admin/profile', ['profiles' => $profiles]);
    }
}
