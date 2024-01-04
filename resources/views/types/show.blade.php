
@extends('app')

@section('title', '顯示特定屬性')

@section('pokemon_theme', '您所選取的寶可夢屬性資料')

@section('pokemon_contents')
<h1>顯示單一屬性</h1>
屬性編號：{{ $type->id }}<br/>
屬性：{{ $type->types }}<br/>
效果絕佳1：{{ $type->super_effective1 }}<br/>
效果絕佳2：{{ $type->super_effective2 }}<br/>
效果絕佳3：{{ $type->super_effective3 }}<br/>
效果絕佳4：{{ $type->super_effective4 }}<br/>
效果絕佳5：{{ $type->super_effective5 }}<br/>
收效甚微1：{{ $type->not_very_effective1 }}<br/>
收效甚微2：{{ $type->not_very_effective2 }}<br/>
收效甚微3：{{ $type->not_very_effective3 }}<br/>
收效甚微4：{{ $type->not_very_effective4 }}<br/>
收效甚微5：{{ $type->not_very_effective5 }}<br/>
收效甚微6：{{ $type->not_very_effective6 }}<br/>
收效甚微7：{{ $type->not_very_effective7 }}<br/>
技能無效：{{ $type->not_effective }}<br/>
@endsection