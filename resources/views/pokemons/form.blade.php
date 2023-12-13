</div>
<div class="form-group">
    {!! Form::label('region', '地區：') !!}
    <!-- 待設計一下拉式選單 -->
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid1', '主屬性：') !!}
    <!-- 待設計一下拉式選單 -->
    {!! Form::select('tid1', $types, $typeSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid2', '副屬性：') !!}
    <!-- 待設計一下拉式選單 -->
        {!! Form::select('tid2', $types, $typeSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('height', '寶可夢身高：') !!}