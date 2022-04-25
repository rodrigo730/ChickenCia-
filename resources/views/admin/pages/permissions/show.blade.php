@extends('adminlte::page')

@section('title', "Detalhes da Permissões{$permissions->name}")

@section('content_header')
    <h1>Detalhes do Permissions <b>{{ $permissions->name }}</b></h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      <ul>
        <li>
          <strong>Nome: </strong> {{$permissions-> name}}
        </li>
            
        <li>
          <strong>Descrição: </strong> {{$permissions-> description}}
        </li>
      </ul>
      
      @include('admin.includes.alerts') 

      <form action="{{ route('permissions.destroy', $permissions->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">EXCLUIR PERFIL
        </button>
      </form>
    </div>
  </div>
@endsection