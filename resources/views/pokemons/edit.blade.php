@extends('app')

@section('title','編輯寶可夢表單')

@section('pokemon_theme','編輯寶可夢的表單')

@section('pokemon_contents')
{!! Form::model($pokemon,['method'=>'PATCH','action'=>'\APP\Http\Controller\PokemonsController@update',$pokemon->id]])!!}
@include('pokemons.from',['submitButtonText'=>"更新寶可夢資料"])
@include('pokemons.form',['submitButtonText'=>"新增屬性資料"])
{!! Form::close()!!}
@endsection