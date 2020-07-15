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

    public function add(){
    	return view('admin/addprofile');
    }

    public function insert(Request $request){
    	$insert        		= new Profile;
    	$insert->id    		= $request->id;
    	$insert->name  		= $request->name;
    	$insert->gender 	= $request->gender;
    	$insert->birthday 	= $request->birthday;
    	$insert->save();

    	return redirect('/profile');
    }

    public function edit($id){
    	$profiles = Profile::find($id);
    	return view('admin/editprofile',['profiles' => $profiles]);
    }

    public function update(Request $request, $id){
    	$update        = Profile::find($id);
    	$update->id    		= $request->id;
    	$update->name  		= $request->name;
    	$update->gender 	= $request->gender;
    	$update->birthday 	= $request->birthday;
    	$update->save();

    	return redirect('/profile');
    }

    public function delete($id){
    	$profile = Profile::find($id);
    	$profile->delete();
    	return redirect('/profile');
    }
}
