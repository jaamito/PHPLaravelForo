@extends('layouts.app')
@section('content')
<div class="alert alert-success">
  <strong>¡Bien hecho!</strong> Nuevo Post creado.
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ url('home') }}">Inicio</a></li>
  <li class="active"><a href="{{ url('home/crear') }}">Crear un nuevo Post</a></li>
</ul>
@endsection

