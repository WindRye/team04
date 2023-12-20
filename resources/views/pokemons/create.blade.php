@extends('app')

@section('title','建立寶可夢表單')

@section('pokemon_theme','建立寶可夢的表單')

@section('pokemon_contents')
@include('message.list')
{!! Form::open(['ur1'=>'pokemons/store'])!!}
@include('pokemons.form',['submitButtonText'=>"新增屬性資料"])
{!! Form::close()!!}
@endsection