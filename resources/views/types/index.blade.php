@extends('app')
@section('title',"寶可夢圖鑑-列出所有屬性')
@section('pokemon_contents')
<h1>列出所有寶可夢</h1>
  <table>
    <tr>
        <th>編號</th>
        <th>屬性</th>
        <th>效果絕佳1</th>
        <th>效果絕佳2</th>
        <th>效果絕佳3</th>
        <th>效果絕佳4</th>
        <th>效果絕佳5</th>
        <th>效果甚微1</th>
        <th>效果甚微2</th>
        <th>效果甚微3</th>
        <th>效果甚微4</th>
        <th>效果甚微5</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($pokemons as $type)
         <tr>
         <td>{{ $pokemons->id]}}</td>
            <td>{{ $pokemons->types }}</td>
            <td>{{ $pokemons->super_effective1 }}</td>
            <td>{{ $pokemons->super_effective2 }}</td>
            <td>{{ $pokemons->super_teffective3 }}</td>
            <td>{{ $pokemons->super_effective4 }}</td>
            <td>{{ $pokemons->super_effective5}}</td>
            <td>{{ $pokemons->not_very_effective1 }}</td>
            <td>{{ $pokemons->not_very_effective2}}</td>
            <td>{{ $pokemons->not_very_effective3}}</td>
            <td>{{ $pokemons->not_very_effective4}}</td>
            <td>{{ $pokemons->not_very_effective5}}</td>
            <td>{{ $pokemons->not_very_effective6}}</td>
            <td>{{ $pokemons->not_very_effective7}}</td>
            <td><a href="{{ route('pokemons.show', ['id'=>$pokemon->id }}">顯示</a></td>
            <td><a href="{{ route('pokemons.edit', ['id'=>$pokemons->id }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endforeach
<table>

@endsection