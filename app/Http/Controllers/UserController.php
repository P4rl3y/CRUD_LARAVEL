<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users = Data::all();
        // return $users;

        $users = Data::OrderBy('id', 'asc')->paginate();
        return view('users.index', compact('users'));
    }

    public function show(Data $user){  

        return view('users.show', compact('user'));
    }   
}
