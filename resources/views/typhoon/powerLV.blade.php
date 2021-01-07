@extends('typhoon_app')
@section('typhoon_content')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('typhoon') }} ">回去</a>
    </div>
    <table>
        <tr>
            <th>year</th>
            <th>id</th>
            <th>name</th>
            <th>arrived</th>
            <th>powerLV</th>
            <th>level</th>
        </tr>
        @foreach($typhoons as $typhoon)
            <tr>
                <td>{{ $typhoon->year }}</td>
                <td>{{ $typhoon->id }}</td>
                <td>{{ $typhoon->name }}</td>
                <td>{{ $typhoon->arrived }}</td>
                <td>{{ $typhoon->powerLV }}</td>
                <td>{{ $typhoon->level }}</td>
            </tr>
        @endforeach
    </table>

@endsection
