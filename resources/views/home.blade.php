@extends('layout')
@section('content')
<div class="jumbotron">
    <div class="container">
        <h1>Curso Eloquent ORM</h1>
        <p>
            Texto
        </p>
    </div>
</div>
<div class="container">
    <h1 class="page-header">
        Ultimos Usuarios Registrados
    </h1>
    <table class="table table-hover table-striped">
        <thead>
            @include('partials.headUsers')
        </thead>
        <tbody>
            @include('partials.listUsers')
        </tbody>
    </table>
</div>
@stop