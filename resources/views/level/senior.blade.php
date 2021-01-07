@extends('typhoon_app')
@section('typhoon_content')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('typhoon') }} ">回去</a>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>description</th>
        </tr>
        @foreach($typhoons as $typhoon)
            <tr>
                <td>{{ $typhoon->id }}</td>
                <td>{{ $typhoon->description }}</td>

        @endforeach
    </table>

@endsection
