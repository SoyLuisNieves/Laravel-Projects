<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return 'Users';
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