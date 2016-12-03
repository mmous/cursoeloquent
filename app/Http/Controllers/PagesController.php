<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function home() {
        $users = User::orderBy('id', 'DESC')
                ->take(10)
                ->get();
        return view('home', compact('users'));
    }

}
