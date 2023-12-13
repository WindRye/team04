@extends('app')

@section('title', '建立屬性表單')

@section('pokemon_theme', '建立屬性的表單')

@section('pokemon_contents')
    {!! Form::open(['url' => 'types/store']) !!}
    @include('types.form', ['submitButtonText'=>"新增屬性資料"])
    {!! Form::close() !!}
@endsection