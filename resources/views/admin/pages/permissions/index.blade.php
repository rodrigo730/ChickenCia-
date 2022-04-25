@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>

        <li class="breadcrumb-item active">
            <a href="{{ route('permissions.index') }}">Perfis</a>
        </li>
    </ol>

    <h1>Permissões <a href="{{ route('permissions.create') }}" class="btn btn-dark" method="POST" style="margin-left: 10px">Criar Novo Perfil</a> </h1>

@stop

@section('content')
    <p>Listagem dos Planos</p>
    <div class="card">
        <div class="card-header">
            <form action="{{ route('permissions.search') }}" method="POST" class="form form-inline">
                @csrf
                <div class="form-group">
                <input type="text" name="filter" placeholder="Filtro" class="form-control" value="{{ $filters['filter'] ??  ''}}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
                </div>
            </form>
        </div>

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        
                        <th style="width:250" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permissions)
                        <tr>
                            <td>
                                {{ $permissions->name }}
                            </td>
            
                            <td>


                                <a href="{{ route('permissions.edit', $permissions->id) }}" class="btn btn-primary">Editar</a>

                                <a href="{{ route('permissions.show', $permissions->id) }}" class="btn btn-info">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                <p> se filters estiver definida roda aqui</P>
                { $permissions->appends($filters)->links() }
            @else
                <p> se FILTER NAO DEFINIDA estiver definida roda aqui</P>
                { $permissions->links() }
            @endif
        </div>
    </div>
@stop