@extends('layout.principal')
@section('title','Pedidos')
@section('content')
    <div class="container">
        <h1 class="display-5">Pedidos</h1>
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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td >Larry the Bird</td>
                <td > Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    
@stop