@extends('layouts.app')

@section('content')
    <h1>Crear Enemigo</h1>

    <form action="{{ route('admin.enemies.store') }}" method="post">
        
        @include('admin.enemies.form');

        <button type="submit" class="btn btn-dark">Crear</button>

    </form>
@endsection