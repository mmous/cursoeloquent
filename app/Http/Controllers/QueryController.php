<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class QueryController extends Controller {

    public function getAll() {
//        $users = User::all();
        $users = User::orderBy('id', 'DESC')
                ->paginate();
        $title = 'Todos';
        return view('methods', compact('title', 'users'));
    }

    public function getGet($gender) {
        $users = User::where('gender', $gender)
                ->get();
        $tgenero = "";
        if ($gender == 'f') {
            $tgenero = "Femenino";
        }
        if ($gender == 'm') {
            $tgenero = "Masculino";
        }
        $title = 'Genero: ' . $tgenero;
        return view('methods', compact('title', 'users'));
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return view('delete');
    }

    public function flist() {
        $users = User::orderBy('name', 'ASC')
                ->pluck('name', 'id');
        return view('lists', compact('users'));
    }

}
