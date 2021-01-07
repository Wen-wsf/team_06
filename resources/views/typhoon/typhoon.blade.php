@extends('typhoon_app')
@section('typhoon_content')

    <form action="{{ url('typhoon/powerLV') }}" method='POST'>
        {!! Form::label('year', '選取強度：') !!}
        {!! Form::select('year', $years, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>
        <table border=2 align="center">
            <tr>
                <th>年份</th>
                <th>颱風編號</th>
                <th>颱風名稱</th>
                <th>是否到達台灣</th>
                <th>颱風強度</th>
                <th>警報發布級數</th>
                <th>建立時間</th>
                <th>編輯時間</th>
            </tr>
            @foreach ($typhoons as $typhoon)
            <tr>
                    <th>{{$typhoon->year}}</th>
                    <th>{{$typhoon->id}}</th>
                    <th>{{$typhoon->name}}</th>
                    <th>{{$typhoon->arrived}}</th>
                    <th>{{$typhoon->strength->description }}</th>
                    <th>{{$typhoon->level}}</th>
                    <th>{{$typhoon->created_at}}</th>
                    <th>{{$typhoon->updated_at}}</th>
                    <th><input type="button" value="更改" onclick="location.href='/typhoon/{{$typhoon->id}}/edit'"></th>
                    <th><input type="button" value="詳情" onclick="location.href='/typhoon/{{$typhoon->id}}'"></th>
                    <form action = "{{url('/typhoon/delete',['id'=>$typhoon->id])}}"method = "post">
                    <th><input class = "btn btn-default" type="submit" value="刪除"></th>
                @method('delete')
                @csrf</form>
            </tr>
            @endforeach
        </table>
    <table align="center">
        <tr>
            <td>
                <input type="button" value="新增" onclick="location.href='typhoon_add'">
                <input type="button" value="強度" onclick="location.href='level'">
                <input type="button" value="查詢" onclick="location.href='senior'">
            </td>
        </tr>
    </table>
@endsection
