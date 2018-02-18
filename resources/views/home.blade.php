@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['route' => 'blog.index', 'method' => 'GET']) !!}
                      <div class="form-group">
                        {!! Form::label('name','Nombre') !!}
                        {!! Form::text('name','Prueba',['class'=>'form-control',id=>'name']) !!}
                      </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
