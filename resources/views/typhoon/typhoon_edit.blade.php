@extends('typhoon_app')

@section('typhoon_content')
    <h1>Write a New Article</h1>
    <hr/>
    @include('message.errorlist')
    {!! Form::model($typhoon, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TyphoonController@update', $typhoon->id]]) !!}
    @include('typhoon.form', ['submitButtonText'=>"更新颱風資料"])
    {!! Form::close() !!}
@endsection
