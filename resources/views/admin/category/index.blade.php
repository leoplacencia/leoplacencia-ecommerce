@extends('admin.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>Categorias

            </h1>
            <a href="" class="btn btn-warning">Agregar</a>
            <br>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td><a href="" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->color }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

    
@stop