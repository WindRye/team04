<div class="form-group">
    {!! Form::label('pokemon', '寶可夢名稱：') !!}
    {!! Form::text('pokemon', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', '地區：') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid1', '主屬性：') !!}
    {!! Form::select('tid1', $types, $typeSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid2', '副屬性：') !!}
        {!! Form::select('tid2', $types, $typeSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('height', '寶可夢身高：') !!}
    {!! Form::text('height', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight', '寶可夢體重：') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender', '寶可夢性別：') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ability', '寶可夢特性：') !!}
    {!! Form::text('ability', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
