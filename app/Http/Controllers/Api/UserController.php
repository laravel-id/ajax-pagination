<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('email', 'ASC')->paginate(20);

    	return response()->json($users);
    }
}
