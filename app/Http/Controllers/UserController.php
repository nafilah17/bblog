<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(){
     	$users = User::paginate(10);
    	return view ('admin/user', ['users' => $users]);
    }

    public function add(){
    	return view('admin/adduser');
    }

    public function insert(Request $request){
    	$insert        		= new User;
    	$insert->id    		= $request->id;
    	$insert->name  		= $request->name;
    	$insert->email 		= $request->email;
    	$insert->role  		= $request->role;
    	$insert->profile_id = $request->profile_id;
    	$insert->password 	= $request->password;
    	$insert->save();

    	return redirect('/user');
    }

    public function edit($id){
    	$users = User::find($id);
    	return view('admin/edituser',['users' => $users]);
    }

    public function update(Request $request, $id){
    	$update        = User::find($id);
    	$update->id    		= $request->id;
    	$update->name  		= $request->name;
    	$update->email 		= $request->email;
    	$update->role  		= $request->role;
    	$update->profile_id = $request->profile_id;
    	$update->password 	= $request->password;
    	$update->save();

    	return redirect('/user');
    }

    public function delete($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect('/user');
    }
}
