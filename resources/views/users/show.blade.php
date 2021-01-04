@extends('layouts.layout')

@section('title', 'Usuario ' . $user->name)

@section('content')
    <h1 class="text-4xl font-sans md:font-serif">Perfil de: {{ $user->name }}</h1>
    <p class="text-lg"><strong>Last Name: </strong>{{ $user->lastName }}</p>
    <p class="text-lg"><strong>address: </strong>{{ $user->address }}</p>
    <p class="text-lg"><strong>city: </strong>{{ $user->city }}</p>
    <p class="text-lg"><strong>streetName: </strong>{{ $user->streetName }}</p>
    <p class="text-lg"><strong>postCode: </strong>{{ $user->postCode }}</p>
    <p class="text-lg"><strong>country: </strong>{{ $user->country }}</p>
    <p class="text-lg"><strong>purchaseDate: </strong>{{ $user->purchaseDate }}</p>
    <p class="text-lg"><strong>creditCardType: </strong>{{ $user->creditCardType }}</p>
    <p class="text-lg"><strong>creditCardNumber: </strong>{{ $user->creditCardNumber }}</p>
    <p class="text-lg"><strong>creditCardExpirationDate: </strong>{{ $user->creditCardExpirationDate }}</p>
    <p class="text-lg"><strong>userName: </strong>{{ $user->userName }}</p>
    <p class="text-lg"><strong>password: </strong>{{ $user->password }}</p>
    <p class="text-lg"><strong>email: </strong>{{ $user->email }}</p>
    <p class="text-lg"><strong>telephone: </strong>{{ $user->telephone }}</p>
    <br>
    <a href="{{route('users.index')}}">Volver a usuarios</a>
    <br>
    
@endsection