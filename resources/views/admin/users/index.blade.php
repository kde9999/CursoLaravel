@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')

<div class="row">
  <div class=" col-md-2"></div>
  <div class="col-md-8">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Administracion de Usuarios</h3>
  </div>
  <div class="panel-body">

    <a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a> <br>
    <table class="table table-bordered">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
        <th>Correo</th>
      <th>Tipo</th>
      <th>Accion</th>
    </thead>

    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
    <td>

        @if($user->type =='admin')
        <span class="label label-danger">{{$user->type}}</span>

        @else
        <span class="label label-warning">{{$user->type}}</span>
        @endif


      </td>
        <td><a href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('seguro que deseas eliminar')"class="btn btn-danger"></a> <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning"></a></td>

      </tr>
      @endforeach
    </tbody>




    </table>

    {!!$users->render()!!}








  </div>

</div>



</div>

</div>

<div class=" col-md-2"></div>



@endsection
