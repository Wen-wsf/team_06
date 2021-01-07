@extends('level_app')
@section('level_content')
<table align="center"><tr><th>詳情</th></tr></table>
<table table style="border:3px #ffd382 dashed;" cellpadding="10" border='1' align="center">
    <tr><th>颱風強度</th><th>{{$level->id}}</th></tr>
    <tr><th>描述</th><th>{{$level->description}}</th></tr>
    <tr><th>建立時間</th><th>{{$level->created_at}}</th></tr>
    <tr><th>編輯時間</th><th>{{$level->updated_at}}</th></tr>
    @foreach($level->typhoons as $typhoon)
        <tr><th>年分</th><th>{{ $typhoon->year }}</th></tr>
        <tr><th>ID</th><th>{{ $typhoon->id }}</th></tr>
        <tr><th>名稱</th><th>{{ $typhoon->name }}</th></tr>
    @endforeach
</table>
<table align="center">
    <tr>
        <th>
            <input type="button" value="更改" onclick="location.href='/level/{{$level->id}}/edit'">
            <input type="button" value="返回" onclick="location.href='/level'">
        </th>
    </tr>
</table>
@endsection

