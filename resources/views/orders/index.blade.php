@extends('layout.principal')
@section('title','Pedidos')
@section('content')
    <div class="container">
        <h1 class="display-5">Pedidos</h1>
        @if ($orders)
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nº Pedido</th>
              <th scope="col">Usuário</th>
              <th scope="col">Valor Pedido</th>
              <th scope="col">Data Pedido</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                <tr>
                  <th scope="row">{{$order->codeorder}}</th>
                  <td>{{$order->name}}</td>
                  <td>{{$order->valuetotal}}</td>
                  <td>{{$order->created_at}}</td>
                </tr>
              @endforeach            
            </tbody>
          </table>
        @else
            <span class="fs-4">Não tem Pedidos no momento</span>
        @endif
    </div>
@stop