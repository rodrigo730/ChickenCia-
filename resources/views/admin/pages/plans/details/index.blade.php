@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('admin.index') }}">Dashboard</a>
    </li>

    <li class="breadcrumb-item">
      <a href="{{ route('plans.index') }}">Planos</a>
    </li> 

    <li class="breadcrumb-item">
      <a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a>
    </li>

    <li class="breadcrumb-item active">
      <a href="{{ route('details.plan.index', $plan->url) }}" class="active">Detalhes</a>
    </li>
  </ol>

  <h1>Detalhes do plano {{ $plan->name }} <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark" style="margin-left: 10px">Novo Detalhe</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th style="width:150px;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Ver</a>

                                <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif
        </div>
    </div>
@stop