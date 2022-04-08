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
                        <th>Preço</th>
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
                            R$ {{ number_format($plan->price, 2, ',', '.')}}
                            </td>
                            <td>
                                <a href="{{ route('details.show', $plan->url) }}" class="btn btn-primary">Ver</a>

                                <a href="{{ route('profiles.plan.index', $plan->url) }}" class="btn btn-primary">Detalhes</a>

                                <a href="{{ route('profiles.edit', $plan->url) }}" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif
        </div>
    </div>
@stop