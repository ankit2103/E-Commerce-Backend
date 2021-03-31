<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected function Register(Request $req)
    {
    	$user = new User;
    	$user->name = $req['name'];
    	$user->email = $req['email'];
    	$user->password = Hash::make($req['password']);
    	return $user;
    	// return "hello";
    }
}
