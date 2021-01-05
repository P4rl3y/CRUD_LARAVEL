@extends('layouts.layout')

@section('title', 'Agregar usuario')

@section('content')
    <h1 class="text-4xl font-sans md:font-serif text-indigo-600">Agregar usuario</h1>
    
    <form action="" method="POST">
        @csrf
        <label>
            Nombre:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        <label>
            Apellido:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="lastName" value="{{old('lastName')}}">
        </label>
        <br>
        <label>
            Domicilio:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="address" value="{{old('address')}}">
        </label>
        <br>
        <label>
            Ciudad:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="city" value="{{old('city')}}">
        </label>
        <br>
        <label>
            Calle:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="streetName" value="{{old('streetName')}}">
        </label>
        <br>
        <label>
            Codigo Postal:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="postCode" value="{{old('postCode')}}">
        </label>
        <br>
        <label>
            Pais:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="country" value="{{old('country')}}">
        </label>
        <br>
        <label>
            Fecha de la compra:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="date" name="purchaseDate" value="{{old('purchaseDate')}}">
        </label>
        <br>
        <label>
            Tipo de Tarjeta de credito:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="creditCardType" value="{{old('creditCardType')}}">
        </label>
        <br>
        <label>
            Numero de Tarjeta de credito:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="creditCardNumber" value="{{old('creditCardNumber')}}">
        </label>
        <br>
        <label>
            Fecha de expiracion de la Tarjeta de credito:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="date" name="creditCardExpirationDate" value="{{old('creditCardExpirationDate')}}">
        </label>
        <br>
        <label>
            Nombre de usuario:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="userName" value="{{old('userName')}}">
        </label>
        <br>
        <label>
            Contraseña:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="password" name="password">
        </label>
        <br>
        <label>
            Email:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="email" name="email" value="{{old('email')}}">
        </label>
        <br>
        <label>
            Telefono:
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="telephone" value="{{old('telephone ')}}">
        </label>
        <br>
        <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full" type="submit">Enviar Formulario</button>
    </form>
@endsection