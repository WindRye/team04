@extends('app')

@section('title', '顯示特定寶可夢')

@section('pokemon_theme', '您所選取的寶可夢資料')

@section('pokemon_contents')

寶可夢:{{ $pokemon->pokemon }}<br/>
地區:{{ $pokemon->region}}<br/>
屬性編號1:{{ $pokemon->tid1 }}<br/>
屬性編號2:{{ $pokemon->tid2}}<br/>
身高m:{{ $pokemon->height }}<br/>
體重kg:{{ $pokemon->weight }}<br/>
性別:{{ $pokemon->gender }}<br/>
特性:{{ $pokemon->ability }}<br/>
操作1:{{ $pokemon->id }}<br/>
操作2:{{ $pokemon->id }}<br/>
操作3:{{ $pokemon->id }}<br/>
@endsection
