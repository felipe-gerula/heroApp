@extends('layouts.app')

@section('content')
    <h1>Editar Item - {{ $item->name }}</h1>

    <form action="{{ route('admin.items.update',['id'=>$item->id]) }}" method="post">
        
        @include('admin.items.form');

        <button type="submit" class="btn btn-primary">Editar</button>

    </form>
@endsection