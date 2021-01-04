@extends('layouts.layout')

@section('title', 'Home')
    
@section('content')
    <div class="container">
        <h1 class="font-sans text-3xl font-bold text-center">CRUD_LARAVEL</h1>
        <p class="font-sans text-md text-center">Practica: Un crud elaborado en en framework laravel de php, para poner enpractica conocimientos basicos sobre el mismo.</p>
        <ul>
            @foreach ($users as $user)
                <a href="{{route('users.show', $user)}}"><li>{{ $user->name}}</li></a>
            @endforeach
        </ul>

        {{$users->links()}}
    </div>
@endsection