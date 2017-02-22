@extends('admin.template.main')

@section('title','Crear Categoria')

@section('content')


  {!! Form::open(['route'=>'categories.store','method'=>'POST'])   !!}
  <div class="panel panel-default">
    <div class="panel-body">

      <div class="form-group">
        {!! Form::label('name','Nombre de la categoria')!!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'nombre de la categoria','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>



    </div>
  </div>


  {!! Form::close()   !!}

@endsection
