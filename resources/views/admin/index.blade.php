@extends('layouts.app')

@section('content')
    <div class="row ">
        <h1>Administrador de Hero</h1>
    </div>

    <div class="row">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Entidad</th>
                    <th scope="col">Cantidad de Elementos</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($report as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['counter'] }}</td>
                    <td>
                        <a href="{{ route($item['route']) }}" class="btn btn-dark">Ir a {{ $item['name'] }} </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection