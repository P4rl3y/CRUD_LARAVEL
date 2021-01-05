<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    public function index(){
        // $users = Data::all();
        // return $users;

        $users = Data::OrderBy('id', 'asc')->paginate();
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(StoreUser $request){
        
        /*$curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/


        $user = Data::create($request->all());


        return redirect()->route('users.show', $user);
    }

    public function show(Data $user){  

        return view('users.show', compact('user'));
    }
    
    
}
