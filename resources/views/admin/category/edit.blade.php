@extends('admin.template')
@section('content')
    <h1>Editar Categoría</h1>
    @if(count($errors) > 0)
        @include('admin.partials.errors')
    @endif
    {!! Form::model($category, array('route' => array('category.update', $category), 'method' => 'PUT')) !!}
        <label for="name">Nombre</label>
        {!! 
            Form::text(
                'name',
                $category->name,
                array(
                    'class'=>'form-control',
                    'placeholder'=>'Ingresa el nombre',
                    'autofocus'=>'autofocus'
                )
            )
        !!}
        <label for="description">Descripción</label>
        {!! 
            Form::textarea(
                'description',
                $category->description,
                array(
                    'class'=>'form-control'
                )
            )
        !!}
        <label for="color">Color:</label>
        <input type="color" name="color" value="{{ isset($category->color) ? $category->color : null }}">
        {!! Form::submit('Actualizar',array('class'=>'btn btn-primary')) !!}
        <a href="{{ route('category.index') }}" class="btn btn-danger">Cancelar</a>

        {!! Form::close() !!}
    
@stop