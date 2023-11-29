@extends('app')

@section('title', '寶可夢圖鑑 - 列出所有屬性')

@section('pokemon_contents')
<h1>列出所有屬性</h1>

<table>
    <tr>
        <th>編號</th>
        <th>屬性</th>
        <th>效果絕佳1</th>
        <th>效果絕佳2</th>
        <th>效果絕佳3</th>
        <th>效果絕佳4</th>
        <th>效果絕佳5</th>
        <th>收效甚微1</th>
        <th>收效甚微2</th>
        <th>收效甚微3</th>
        <th>收效甚微4</th>
        <th>收效甚微5</th>
        <th>收效甚微6</th>
        <th>收效甚微7</th>
        <th>技能無效</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($types); $i++)
        <tr>
            <td>{{ $types[$i]['id'] }}</td>
            <td>{{ $types[$i]['types'] }}</td>
            <td>{{ $types[$i]['super_effective1'] }}</td>
            <td>{{ $types[$i]['super_effective2'] }}</td>
            <td>{{ $types[$i]['super_effective3'] }}</td>
            <td>{{ $types[$i]['super_effective4'] }}</td>
            <td>{{ $types[$i]['super_effective5'] }}</td>
            <td>{{ $types[$i]['not_very_effective1'] }}</td>
            <td>{{ $types[$i]['not_very_effective2'] }}</td>
            <td>{{ $types[$i]['not_very_effective3'] }}</td>
            <td>{{ $types[$i]['not_very_effective4'] }}</td>
            <td>{{ $types[$i]['not_very_effective5'] }}</td>
            <td>{{ $types[$i]['not_very_effective6'] }}</td>
            <td>{{ $types[$i]['not_very_effective7'] }}</td>
            <td>{{ $types[$i]['not_effective'] }}</td>
            <td><a href="{{ route('types.show', ['id'=>$types[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('types.edit', ['id'=>$types[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>

@endsection