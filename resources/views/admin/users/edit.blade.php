@extends('admin.template.main')

@section('title','Editar Usuario' .$user->name)

@section('content')

{!!  Form::open(['route' => ['users.update',$user->id], 'method' => 'PUT']) !!}

      <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'nombre completo','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('email','Correo Electronico')!!}
        {!! Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'mail','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password','Contraseña')!!}
        {!! Form::text('password',$user->password,['class'=>'form-control','placeholder'=>'*****','required'])!!}
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
