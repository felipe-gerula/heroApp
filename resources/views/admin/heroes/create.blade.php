@extends('layouts.app')

@section('content')
    <h1>Crear Heroe</h1>

    <form action="{{ route('admin.heroes.store') }}" method="post">
        
        @include('admin.heroes.form');

        <button type="submit" class="btn btn-dark">Crear</button>

    </form>
@endsection