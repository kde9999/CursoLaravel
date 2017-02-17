@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')

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


    <td><a href="{{route('admin.categories.destroy',$category->id)}}" onclick="return confirm('seguro que deseas eliminar')"class="btn btn-danger"></a> <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning"></a></td>


  </tr>
  @endforeach
</tbody>




</table>



@endsection
