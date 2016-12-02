<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class QueryController extends Controller
{
    public function getAll() {
        $users = User::all();
        return view('query_all', compact('users'));
        
    }
}
