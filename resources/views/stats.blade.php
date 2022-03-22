@extends('layout')

@section('title','Main page')

@section('content')
<h1>Üdvözöllek az óvoda plüss számon tartó oldalán</h1>
<p>Ennyi plüss állattal rendelkezik az óvodánk: {{ $plussCount }}</p>
<a href="{{ route('plusses.index') }}"><button type="button">Plüssállataink amink vannak</button></a>
@endsection
