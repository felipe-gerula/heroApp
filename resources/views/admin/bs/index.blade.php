@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>Sistema de Batalla</h1> 
    </div>

    <div class="row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <h2>HERO</h2>
        </div>

        <div class="col bg-alert text-dark">
            <h3>VS</h3>
        </div>

        <div class="col-5 bg-danger">
            <h2>ENEMY</h2>
        </div>   
    </div>

    <div class="row text-white mt-2 bg-dark">
        <div class="col text-center">
            <h3>Eventos de Batalla</h3>
        </div>
    </div>

    <div class="mt-3">
        <div class="alert alert-success text-center" role="alert">
            Hero ataque de 15 a enemigo!
        </div>

        <div class="alert alert-danger text-center" role="alert">
            Hero recibe ataque de 15 enemigo!
        </div> 
    </div>

@endsection