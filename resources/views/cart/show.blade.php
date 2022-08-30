@extends('layout.principal')
@section('title','Carrinho')
@section('content')
<div class="container">
  
  <h1 class="display-5">Carrinho</h1>
  <form action="" method="post">
    
  <div class="container mb-5 gap-1" id="produtos">
    
  </div>

  {{-- AREA DO ENDEREÇO --}}
  <div class="container bg-light border p-2">
    <span class="fs-3"> 
        Dados de entrega
    </span>
    <div class="row">
      <div class="row">
        <div class="col-sm-3">
          <label for="">Cep</label>
          <input class="form-control" type="text" placeholder="Cep" class="d-block w-100">
        </div>
      </div>

      <div class="row">
          <div class="col-sm-6">
            <label for="">Logradouro</label>
            <input class="form-control" type="text" placeholder="Rua/Avenida" class="d-block w-100">
          </div>
          <div class="col-sm-3">
            <label for="">Número</label>
            <input class="form-control" type="text" placeholder="Nº" class="d-block w-100">
          </div>
          <div class="col-sm-3">
            <label for="">Complemento</label>
            <input class="form-control" type="text" placeholder="" class="d-block w-100 ">
          </div>
      </div>

      <div class="row">
          <div class="col-sm-3">
            <label for="">Cidade</label>
            <input class="form-control" type="text" placeholder="Cidade" class="d-block w-100">
          </div>
          <div class="col-sm-3">
            <label for="">UF</label>
            <input class="form-control" type="text" placeholder="Estado" class="d-block w-100">
          </div>
      </div>
    </div>
  </div>
  <div class="container p-2 text-end">
      <span class="d-block">Valor Total</span>
      <button type="submit" class="btn btn-success">Finalizar Compra</button>
  </div>
  </form>
</div>
@stop
<script src="{{asset('/js/cart/cart.js')}}"></script>