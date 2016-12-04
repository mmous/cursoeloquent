@extends('layout')
@section('content')
<div class="container">
    <h1 class="page-header">
        Lista de Usuarios
    </h1>
    <h3 class="h3">
        {{ $title }}
    </h3>
    <p>{{ $users->total() }} Registros | Pagina {{ $users->currentPage() }} de {{ $users->lastPage() }} </p>
    <table class="table table-hover table-striped">
        <thead>
            @include('partials.headUsers')
        </thead>
        <tbody>
            @include('partials.listUsers')
        </tbody>
    </table>
    {!! $users->render() !!}
</div>
@stop