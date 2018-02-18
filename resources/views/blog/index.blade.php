@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1 class="page-header" >Bienvenido a mi Blog
        @can('create articles')
          <button type="button" name="button" class="btn btn-success btn-sm pull-right">Nueva Articulo</button>
        @endcan
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th colspan="3">
              &nbsp;
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mi Primera Publicacion</td>
            <td>Publicado</td>
            <td>
              @can('view articles')
                <button type="button" name="button" class="btn btn-primary btn-sm">Ver</button>
              @endcan
            </td>
            <td>
              @can('edit articles')
                <button type="button" name="button" class="btn btn-warning btn-sm" >Editar</button>
              @endcan
            </td>
            <td>
              @can('delete articles')
                <button type="button" name="button" class="btn btn-danger btn-sm" >Eliminar</button>
              @endcan
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
