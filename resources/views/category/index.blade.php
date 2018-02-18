@extends('layouts.app')
 @section('content')
  <div id="category_app">
  <div class="row">
     <div class="col-md-12">
       <div class="col-xs-12 col-md-6">
         <h1 style="margin:0" >Categorias</h1>
       </div>
       <div class="col-xs-12 col-md-2 pull-right">
         <button type="button" name="button"
         class="btn btn-success btn-sm"
         data-toggle="modal"
         data-target="#modal-category">
         Nueva Categoria
         </button>
       </div>
       <div class="col-xs-12 col-md-4 pull-right">
         <input type="text" placeholder="Buscar Categoria"
                class="form-control"
                v-model="find_category">
       </div>
     </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
     @include('category.partials.table')
    </div>
  </div>
    @include('category.partials.modalEdit')
    @include('category.partials.modalCreate')
  </div>
 @endsection
