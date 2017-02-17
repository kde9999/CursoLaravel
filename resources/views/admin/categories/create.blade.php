@extends('admin.template.main')

@section('title','Crear Categoria')

@section('content')


  {!! Form::open(['route'=>'categories.store','method'=>'POST'])   !!}

  <div class="form-group">
    {!! Form::label('name','Nombre de la categoria')!!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'nombre de la categoria','required'])!!}
  </div>

  <div class="form-group">
    {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  </div>

  {!! Form::close()   !!}

@endsection
