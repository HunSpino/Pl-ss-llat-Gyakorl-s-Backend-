@extends('layout')

@section('content')

<h1>Terem edit</h1>
    <form method='POST' action="{{ route('plusses.update', $pluss->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Neve aplüssnek: <br>
            <input type="text" name="name" value="{{ $pluss->name }}"></input>
        </div>
        <div>
            <input type="submit" value="Edit">
            <a href="{{ route('plusses.index',[$pluss->id]) }}"><button type="button">Mégse</button></a>
        </div>
    </form>
@endsection
