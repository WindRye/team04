@extends('app')

@section('title',"寶可夢圖鑑-列出特定寶可夢')

@section('pokemon_contents')
<h1>列出所有寶可夢</h1>
  <table>
    <tr>
        編號{{ $pokemon->id }}</br>
        寶可夢{{ $pokemon->pokemon }}</br>
        地區{{ $pokemon->region }}</br>
        屬性編號1{{ $pokemon->tid1 }}</br>
        屬性編號2{{ $pokemon->tid2 }}</br>
        身高{{ $pokemon->height }}</br>
        體重{{ $pokemon->weight }}</br>
        性別{{ $pokemon->gender }}</br>
        特性{{ $pokemon->ability }}</br>
        @endsection