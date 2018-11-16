<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        if (request()->has('empty')){
            $users = [];
        }else{
            $users = ['Luis', 'Jorge', 'Fernando', 'Master'];   
        }
        
    	return view('users', [
            'users' => $users,
            'title' => 'List of users'
        ]);
    }

    public function show($id)
    {
    	return "Showing users detail: {$id}";
    }

    public function create()
    {
    	return 'Create new user';
    }
}
