
@extends('app')

@section('title', '顯示特定寶可夢')

@section('pokemon_theme', '您所選取的寶可夢資料')

@section('pokemon_contents')
寶可夢編號：{{ $pokemon->id }}<br/>
寶可夢名稱：{{ $pokemon->pokemon }}<br/>
主屬性編號：{{ $pokemon->tid1 }}<br/>
副屬性編號：{{ $pokemon->tid2 }}<br/>
寶可夢身高：{{ $pokemon->height }}<br/>
寶可夢體重：{{ $pokemon->weight }}<br/>
寶可夢性別：{{ $pokemon->gender }}<br/>
寶可夢特性：{{ $pokemon->ability }}<br/>
@endsection