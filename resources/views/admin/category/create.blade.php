@extends('admin.template')
@section('content')
    <h1>Agregar Categoría</h1>
    @if(count($errors) > 0)
        @include('admin.partials.errors')
    @endif
    {!! Form::open(['route'=>'category.store']) !!}
    
        <label for="name">Nombre</label>
        {!! 
            Form::text(
                'name',
                null,
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
                null,
                array(
                    'class'=>'form-control'
                )
            )
        !!}
        <label for="color">Color:</label>
        <input type="color" name="color" >
        {!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}
        <a href="{{ route('category.index') }}" class="btn btn-danger">Cancelar</a>

        {!! Form::close() !!}
  
    
@stop