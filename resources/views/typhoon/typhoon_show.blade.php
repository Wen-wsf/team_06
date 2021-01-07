@extends('typhoon_app')
@section('typhoon_content')
    <table align="center"><tr><th>詳情</th></tr></table>
    <table table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' align="center">
        <tr><th>年份</th><th>{{$year}}</th></tr>
        <tr><th>颱風編號</th><th>{{$id}}</th></tr>
        <tr><th>颱風名稱</th><th>{{$name}}</th></tr>
        <tr><th>是否到達台灣</th><th>{{$arrived}}</th></tr>
        <tr><th>颱風強度</th><th>{{$powerLV}}</th></tr>
        <tr><th>警報發布級數</th><th>{{$level}}</th></tr>
        <tr><th>建立時間</th><th>{{$created_at}}</th></tr>
        <tr><th>編輯時間</th><th>{{$updated_at}}</th></tr>
    </table>
    <table align="center">
        <tr>
            <th>
                <input type="button" value="更改" onclick="location.href='/typhoon/{{$id}}/edit'">
                <input type="button" value="返回" onclick="location.href='/typhoon'">
            </th>
        </tr>
    </table>
n
