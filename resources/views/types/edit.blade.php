@section('pokemon_theme', '編輯中的屬性')

@section('pokemon_contents')
    @include('message.list')
    {!! Form::model($type, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TypesController@update', $type->id]]) !!}
    @include('types.form', ['submitButtonText'=>"更新屬性資料"])
    {!! Form::close() !!}