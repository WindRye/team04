<div class="form-group">
    {!! Form::label('pokemon', '寶可夢：') !!}
    {!! Form::text('pokemon', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', '地區：') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid1', '屬性編號1<：') !!}
    {!! Form::select('tid1', $types, $typeSelected1, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid2', '屬性編號2<：') !!}
    {!! Form::select('tid2', $types, $typeSelected2, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('height','身高m:') !!}
    {!! Form::text('height', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight', '體重kg：') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender', '性別：') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ability', '特性：') !!}
    {!! Form::text('ability', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>