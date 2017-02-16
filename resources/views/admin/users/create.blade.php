@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

  {!! Form::open(['route'=>'users.store','method'=>'POST'])   !!}



      <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'nombre completo','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('email','Correo Electronico')!!}
        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'mail','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password','Contraseña')!!}
        {!! Form::text('password',null,['class'=>'form-control','placeholder'=>'*****','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('type','tipo')!!}
        {!! Form::select('type',['member'=>'miembro','admin'=>'administrador'],null,['class'=>'form-control','required'] )!!}
      </div>

      <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>


  {!! Form::close()   !!}


@endsection
