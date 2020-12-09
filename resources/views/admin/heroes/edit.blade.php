@extends('layouts.app')

@section('content')
    <h1>Editar Heroe - {{ $hero->name }}</h1>

    <form action="{{ route('admin.heroes.update',['id'=>$hero->id]) }}" method="post">
        
        @include('admin.heroes.form')

        <button type="submit" class="btn btn-primary">Editar</button>

    </form>
@endsection