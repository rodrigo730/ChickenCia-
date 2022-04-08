@extends('adminlte::page')

@section('title', 'Editar o Perfil{{ $profile->name }}')

@section('content_header')
    <h1>Editar o Perfil <b>{{ $profile->name }}</b></h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
          <form action="{{ route('profiles.update' , $profile->id)}}" class="form" method="POST">
             
              @method('PUT')
              @include('admin.pages.profiles._partials.form')  
              
              <div class="form-group">
                <button type="submit" class="btn btn-dark">Editar</button>
              </div> 
          </form>

          </form>
        </div>
    </div>
@endsection