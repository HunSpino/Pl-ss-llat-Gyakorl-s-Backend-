@extends('layout')

@section('title','Új plüss feljegyzése')

@section('content')
<h1>Új plüss</h1>
    <form method='POST' action="{{ route('plusses.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Neve a plüssnek: <br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create" class="btn btn-primary">
            <a href="{{ route('plusses.index') }}"><button type="button">Mégse</button></a>
        </div>
    </form>
@endsection
