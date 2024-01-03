@extends('app')
@section('title',"寶可夢圖鑑-列出所有寶可夢')
@section('pokemon_theme','寶可夢')
@section('pokemon_contents')

<h1>列出所有寶可夢</h1>
  <table>
    <tr>
        <th>編號</th>
        <th>寶可夢</th>
        <th>地區</th>
        <th>屬性編號1</th>
        <th>屬性編號2</th>
        <th>身高</th>
        <th>體重</th>
        <th>性別</th>
        <th>特性</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($pokemons as $pokemon)
         <tr>
         <td>{{ $pokemons[$i]['id'] }}</td>
            <td>{{ $pokemons[$i]['pokemon'] }}</td>
            <td>{{ $pokemons[$i]['region'] }}</td>
            <td>{{ $pokemons[$i]['tid1'] }}</td>
            <td>{{ $pokemons[$i]['tid2'] }}</td>
            <td>{{ $pokemon->type1->types }}</td>
            <td>{{ $pokemon->type2->types }}</td>
            <td>{{ $pokemons[$i]['height'] }}</td>
            <td>{{ $pokemons[$i]['weight'] }}</td>
            <td>{{ $pokemons[$i]['gender'] }}</td>
            <td>{{ $pokemons[$i]['ability'] }}</td>
            <td><a href="{{ route('pokemons.show', ['id'=>$pokemon->id }}">顯示</a></td>
            <td><a href="{{ route('pokemons.edit', ['id'=>$pokemons->id }}">修改</a></td>    
            <td>刪除</td>  
            <td>刪除</td>  
            <td>
                <form action="{{ url('/pokemons/delete', ['id' => $pokemon->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>    
        </tr>
    @endforeach
    <a href="{{ route('pokemons.height') }} ">身高高於100的寶可夢</a>
    <form action="{{ url('pokemons/region') }}" method='GET'>
        {!! Form::label('reg', '選取地區：') !!}
        {!! Form::select('reg', $regions, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>  
    <form action="{{ url('pokemons/ability') }}" method='GET'>
        {!! Form::label('ability', '選取特性：') !!}
        {!! Form::select('ability', $abilitys, $selectedAbility, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form> 

    </table>
{{ $pokemons->links() }}
@endsection