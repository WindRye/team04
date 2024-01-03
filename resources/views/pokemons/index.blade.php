
@extends('app')

@section('title', '寶可夢圖鑑 - 列出所有寶可夢')

@section('pokemon_theme', '寶可夢')

@section('pokemon_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('pokemons.create') }} ">新增寶可夢</a>
    @endcan
    <a href="{{ route('pokemons.index') }} ">所有寶可夢</a>
    <a href="{{ route('pokemons.height') }} ">身高高於100的寶可夢</a>
<form action="{{ url('pokemons/region') }}" method='GET'>
        {!! Form::label('reg', '選取地區：') !!}
        {!! Form::select('reg', $regions, $selectedRegion, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>  
    <form action="{{ url('pokemons/ability') }}" method='GET'>
        {!! Form::label('ability', '選取特性：') !!}
        {!! Form::select('ability', $abilitys, $selectedAbility, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form> 

</div>
<table>
    <tr>
        <th>編號</th>
        <th>寶可夢</th>
        <th>地區</th>
        <th>主屬性</th>
        <th>副屬性</th>
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
{{ $pokemons->withQueryString()->links() }}
@endsection