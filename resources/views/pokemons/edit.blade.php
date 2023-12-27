@extends('app')

@section('title', '編輯特定寶可夢')

@section('pokemon_theme', '編輯中的寶可夢')

@section('pokemon_contents')
    @include('message.list')
    {!! Form::model($pokemon, ['method' => 'PATCH','action' => ['\App\Http\Controllers\PokemonsController@update', $pokemon->id]]) !!}
    @include('pokemons.form', ['submitButtonText'=>"更新寶可夢資料"])
    {!! Form::close() !!}
@endsection