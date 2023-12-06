@extends('app')
@section('title',"寶可夢圖鑑-列出特定屬性')
@section('pokemon_contents')
<h1>顯示單一屬性</h1>
編號{{ $pokemon->id }}</br>
        效果絕佳1:{{ $type->super_effective1 }}</br>
        效果絕佳2:{{ $type->super_effective2 }}</br>
        效果絕佳3:{{ $type->super_effective3 }}</br>
        效果絕佳4:{{ $type->super_effective4 }}</br>
        效果絕佳5:{{ $type->super_effective5 }}</br>
        效果甚微1:{{ $type->not_very_effective1_effective1 }}</br>
        效果甚微2:{{ $type->not_very_effective1_effective2 }}</br>
        效果甚微3:{{ $type->not_very_effective1_effective3 }}</br>
        效果甚微4:{{ $type->not_very_effective1_effective4 }}</br>
        效果甚微5:{{ $type->not_very_effective1_effective5 }}</br>
        效果甚微6:{{ $type->not_very_effective1_effective6 }}</br>
        效果甚微7:{{ $type->not_very_effective1_effective7 }}</br>
        效果無效:{{$type->not_effective}}</br>
@endsection