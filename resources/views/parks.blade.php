@extends('main')

@section('content')

<h1>Nombre: {{ $park->name }}</h1>
<p>Dirección: {{ $park->address }}</p>
<p>Descripción: {{ $park->description }}</p>

@endsection