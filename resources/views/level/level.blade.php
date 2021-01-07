@extends('level_app')
@section('level_content')
        <table border=2 align="center">
            <tr>
                <th>颱風強度</th>
                <th>描述</th>
                <th>建立時間</th>
                <th>編輯時間</th>
            </tr>
            @foreach ($levels as $level)
            <tr>
                <th>{{$level->id}}</th>
                <th>{{$level->description}}</th>
                <th>{{$level->created_at}}</th>
                <th>{{$level->updated_at}}</th>
                <th><input type="button" value="更改" onclick="location.href='/level/{{$level->id}}/edit'"></th>
                <th><input type="button" value="詳情" onclick="location.href='/level/{{$level->id}}'"></th>
                <form action = "{{url('/level/delete',['id'=>$level->id])}}"method = "post">
                <th><input class = "btn btn-default" type="submit" value="刪除"></th>
                @method('delete')
                @csrf</form>
            </tr>
            @endforeach
        </table>
        <table align="center">
            <tr>
                <td><input type="button" value="新增" onclick="location.href='level_add'"></td>
                <td><input type="button" value="颱風列表" onclick="location.href='typhoon'"></td>
            </tr>
        </table>
        @endsection

