@extends('app')

@section('title', '顯示特定屬性')

@section('pokemon_theme', '您所選取的寶可夢屬性資料')

@section('pokemon_contents')
@section('pokemon_theme', '屬性')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('types.create') }} ">新增屬性</a>
    <a href="{{ route('types.index') }} ">所有屬性</a>
</div>
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
        @can('admin')
        <th>操作2</th>
        @elsecan('manager')
        <th>操作2</th>
        @endcan
    </tr>
    @foreach($types as $type)
    <tr>
            <td>{{ $type->id }}</td>
            <td>{{ $type->types }}</td>
            <td>{{ $type->super_effective1 }}</td>
            <td>{{ $type->super_effective2 }}</td>
            <td>{{ $type->super_effective3 }}</td>
            <td>{{ $type->super_effective4 }}</td>
            <td>{{ $type->super_effective5 }}</td>
            <td>{{ $type->not_very_effective1 }}</td>
            <td>{{ $type->not_very_effective2 }}</td>
            <td>{{ $type->not_very_effective3 }}</td>
            <td>{{ $type->not_very_effective4 }}</td>
            <td>{{ $type->not_very_effective5 }}</td>
            <td>{{ $type->not_very_effective6 }}</td>
            <td>{{ $type->not_very_effective7 }}</td>
            <td>{{ $type->not_effective }}</td>
            <td><a href="{{ route('types.show', ['id'=>$type->id]) }}">顯示</a></td>
            @can('admin')
            <td><a href="{{ route('types.edit', ['id'=>$type->id]) }}">修改</a></td>   
            @elsecan('manager')
            <td><a href="{{ route('types.edit', ['id'=>$type->id]) }}">修改</a></td>   
            @endcan  
            <td>
                <form action="{{ url('types/delete', ['id' => $type->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>   
    </tr>
    @endforeach
</table>

@endsection
