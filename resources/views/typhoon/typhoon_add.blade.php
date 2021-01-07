@extends('typhoon_app')
@section('typhoon_content')
    <h1>Write a New Article</h1>
    <hr/>
    @include('message.errorlist')
    {!! Form::open(['url'=>'/typhoon_add_updating']) !!}
    <div class = "from-group">
        @include('typhoon.form',['submitButtonText'=>"新增"])
    </div>
    {!! Form::close() !!}
@endsection
