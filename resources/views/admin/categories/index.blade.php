@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')

<div class="row">
  <div class=" col-md-2"></div>
  <div class="col-md-8">



<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Administracion de Categorias</h3>
  </div>
  <div class="panel-body">

    <table class="table table-bordered">
    <thead>
      <th>ID</th>
      <th>Nombre</th>

      <th>Accion</th>
    </thead>

    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><a href="" onclick="return confirm('seguro que deseas eliminar')"class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>

</div>

</div>

<div class=" col-md-2"></div>


@endsection
