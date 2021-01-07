@extends('level_app')
@section('level_content')
    <h1>Write a New Article</h1>
    <hr/>
    @include('message.errorlist')
    {!! Form::open(['url'=>'/level_add_updating']) !!}
    <div class = "from-group">
        @include('level.form',['submitButtonText'=>"新增"])
    </div>
    {!! Form::close() !!}
@endsection

