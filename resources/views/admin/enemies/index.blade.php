@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>Lista de Enemigos</h1> 
    </div>

    <div class="row">
        <a href="{{ route('admin.enemies.create') }}" class="btn btn-dark mb-3 mt-2">Crear Enemigo</a>
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
                    <th scope="col">Monedas</th>
                    <th scope="col">XP</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enemies as $enemy)
                    <tr>
                        <th scope="row">{{$enemy->id}}</th>
                        <td>{{$enemy->name}}</td>
                        <td>{{$enemy->hp}}</td>
                        <td>{{$enemy->atq}}</td>
                        <td>{{$enemy->def}}</td>
                        <td>{{$enemy->coins}}</td>
                        <td>{{$enemy->xp}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                <a href="{{ route('admin.enemies.edit',['id'=>$enemy->id]) }}" class="btn btn-primary">Modificar</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('admin.enemies.destroy',['id'=>$enemy->id]) }}" method="post">
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