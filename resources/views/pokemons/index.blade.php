@extends('app')

@section('title', '顯示特定屬性')

@section('pokemon_theme', '您所選取的寶可夢屬性資料')

@section('pokemon_contents')
<h1>列出所有寶可夢</h1>
<table>
    <tr>
        <th>編號</th>
        <th>寶可夢</th>
        <th>地區</th>
        <th>屬性編號1</th>
        <th>屬性編號2</th>
        <th>身高m</th>
        <th>體重kg</th>
        <th>性別</th>
        <th>特性</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($pokemons as $pokemon)
        <tr>
        <td>{{ $pokemon->id }}</td>
        <td>{{ $pokemon->pokemon }}</td>
        <td>{{ $pokemon->region }}</td>
        <td>{{ $pokemon->type1->types }}</td>
        <td>{{ $pokemon->type2->types }}</td>
        <td>{{ $pokemon->height }}</td>
        <td>{{ $pokemon->weight }}</td>
        <td>{{ $pokemon->gender }}</td>
        <td>{{ $pokemon->ability }}</td>
        <td><a href="{{ route('pokemons.show', ['id'=>$pokemon->id]) }}">顯示</a></td>
        <td><a href="{{ route('pokemons.edit', ['id'=>$pokemon->id]) }}">修改</a></td>     
        <td>
            <form action="{{ url('/pokemons/delete', ['id' => $pokemon->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                @csrf
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection