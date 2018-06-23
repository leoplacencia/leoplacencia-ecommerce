@extends('admin.template')
@section('content')
<h1>Dashboard</h1>
<h3>Bienvenido {{ Auth::user()->user }} al panel de administración.</h3>
<div class="col-md-6">
    <div class="panel">
        <i class="fa fa-list-alt icon-home">
            <a href="{{ route('category.index') }}">Categorias</a>
        </i>

    </div>
    <div class="panel">
        <i class="fa fa-list-alt icon-home">
            <a href="{{ route('product.index') }}">Productos</a>
        </i>
    </div>
    <div class="panel">
        <i class="fa fa-list-alt icon-home">
            <a href="{{ route('category.index') }}">Pedidos</a>
        </i>

    </div>
    <div class="panel">
        <i class="fa fa-list-alt icon-home">
            <a href="{{ route('category.index') }}">Usuarios</a>
        </i>

    </div>
</div>
@stop