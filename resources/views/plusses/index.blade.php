@extends('layout')

@section('content')
<p><a href="{{ route('home') }}"><button type="button">Vissza a főoldalra</button></a></p>
<table>
    <tr>
        <th>Név</th>
        <th>Műveletek</th>
        @foreach ($plusses as $pluss)
        <tr>
            <th>{{ $pluss->name }}</th>
            <th>
            @include('delete-pluss-button', ['plussId'=>$pluss->id])
            <a href="{{ route('plusses.edit', [$pluss->id]) }}"><button type="button">Edit</button></a>
            </th>
        </tr>
        @endforeach
    </tr>
</table>
<p><a href="{{ route('plusses.create') }}"><button type="button">Add</button></a></p>
@endsection
