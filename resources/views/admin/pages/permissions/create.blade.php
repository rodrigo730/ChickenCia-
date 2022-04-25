@extends('adminlte::page')

@section('title', 'Cadastrar Novo Perfil')

@section('content_header')
    <h1>Cadastrar Novo Perfil</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
             <form action="{{route('permissions.store')}}"   class="form" method="POST">
              @include('admin.pages.profiles._partials.form')
            <div class="form-group">
              <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div> 
          </form>
        </div>
    </div>
@endsection