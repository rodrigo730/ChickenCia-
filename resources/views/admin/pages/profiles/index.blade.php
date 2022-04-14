@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>

        <li class="breadcrumb-item active">
            <a href="{{ route('profiles.index') }}">Perfis</a>
        </li>
    </ol>

    <h1>Painel <a href="{{ route('profiles.create') }}" class="btn btn-dark" method="POST" style="margin-left: 10px">Criar Novo Perfil</a> </h1>

@stop

@section('content')
    <p>Listagem dos Planos</p>
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
                @csrf
                <div class="form-group">
                <input type="text" name="filter" placeholder="Procurar" class="form-control" value="{{ $filters['filter'] ??  ''}}">
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
                    @foreach ($profiles as $profiles)
                        <tr>
                            <td>
                                {{ $profiles->name }}
                            </td>
            
                            <td>


                                <a href="{{ route('profiles.edit', $profiles->id) }}" class="btn btn-primary">Detalhes</a>

                                <a href="{{ route('profiles.show', $profiles->id) }}" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                <p> se filters estiver definida roda aqui</P>
                { $profiles->appends($filters)->links() }
            @else
                <p> se FILTER NAO DEFINIDA estiver definida roda aqui</P>
                { $profiles->links() }
            @endif
        </div>
    </div>
@stop