
@extends('app')

@section('title', '顯示特定寶可夢')

@section('pokemon_theme', '您所選取的寶可夢資料')

@section('pokemon_contents')
<h1>顯示單一寶可夢</h1>
寶可夢編號：{{ $pokemon->id }}<br/>
寶可夢名稱：{{ $pokemon->pokemon }}<br/>
主屬性：{{ $pokemon->type1->types }}<br/>
副屬性：{{ $pokemon->type2->types }}<br/>
寶可夢身高：{{ $pokemon->height }}<br/>
寶可夢體重：{{ $pokemon->weight }}<br/>
寶可夢性別：{{ $pokemon->gender }}<br/>
寶可夢特性：{{ $pokemon->ability }}<br/>
@endsection