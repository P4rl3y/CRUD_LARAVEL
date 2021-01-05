@extends('layouts.layout')

@section('title', 'Home')
    
@section('content')
    <div class="container">
        <h1 class="font-sans text-3xl font-bold text-center">CRUD_LARAVEL</h1>
        <p class="font-sans text-md text-center">LISTADO DE REGISTROS</p>
        <a href="{{route('users.create')}}">Agregar usuario</a>
        <ul>
            @foreach ($users as $user)
                <a href="{{route('users.show', $user)}}"><li class="text-indigo-600 text-xl name"><strong>{{$user->id}}. </strong> {{ $user->name }}</li></a>
            @endforeach
        </ul>

        {{$users->links()}}
    </div>
@endsection