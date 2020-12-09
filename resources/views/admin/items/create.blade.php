@extends('layouts.app')

@section('content')
    <h1>Crear Item</h1>

    <form action="{{ route('admin.items.store') }}" method="post">
        
        @include('admin.items.form');

        <button type="submit" class="btn btn-dark">Crear</button>

    </form>
@endsection