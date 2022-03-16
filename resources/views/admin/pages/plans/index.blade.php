@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos <a href="[[ route['plans.create'] ]]" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
<div class="card">
  
  <div class="card-header">
  #filtros

  </div>   
  <div class="card-body">
    <table class="table table-codensed">
      <thead>
          <tr>
              <th>Nome</th>
              <th>Preço</th>
              <th width= "50px" >Ações</th>
          </tr>
      </thead>
       <tbody>
           @foreach($plans as $plan)
           
           <tr>
               <td>
                   {{ $plan->name}}
               </td>
               <td>
                   {{ $plan->price}}
               </td>
               
               <td>
                  <a href="" class="btn btn-warning">Ver</a>
               </td>
           </tr>

           @endforeach
       </tbody>
  
     </table>
   </div>
   <div class="card-footer">
       {!! $plans->links() !!}
   </div>
</div>
@stop 