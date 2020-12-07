@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>Lista de Items</h1> 
    </div>

    <div class="row">
        <a href="{{ route('admin.items.create') }}" class="btn btn-dark mb-3 mt-2">Crear Item</a>
    </div>

    <div class="row">
        <table  class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">HP</th>
                    <th scope="col">Ataque</th>
                    <th scope="col">Defensa</th>
                    <th scope="col">Suerte</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->hp}}</td>
                        <td>{{$item->atq}}</td>
                        <td>{{$item->def}}</td>
                        <td>{{$item->luck}}</td>
                        <td>{{$item->cost}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                <a href="{{ route('admin.items.edit',['id'=>$item->id]) }}" class="btn btn-primary">Modificar</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('admin.items.destroy',['id'=>$item->id]) }}" method="post">
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection