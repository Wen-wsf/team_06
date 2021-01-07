@extends('level_app')
@section('level_content')
    <h1>Write a New Article</h1>
    <hr/>
    @include('message.errorlist')
    {!! Form::model($level, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\LevelController@update', $level->id]]) !!}
    @include('level.form', ['submitButtonText'=>"更新颱風強度資料"])
    {!! Form::close() !!}
@endsection
