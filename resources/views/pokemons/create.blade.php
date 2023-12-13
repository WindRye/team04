@extends('app')

@section('title', '建立寶可夢表單')

@section('pokemon_theme', '建立寶可夢表單')

@section('pokemon_contents')

@section('pokemon_contents')
    {!! Form::open(['url' => 'pokemons/store']) !!}
    @include('pokemons.form', ['submitButtonText'=>"新增寶可夢資料"])
    {!! Form::close() !!}
@endsection