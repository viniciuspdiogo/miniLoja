@extends('layout.principal')
@section('title','Carrinho')
@section('content')
<div class="container" id="conteudo">
@if(session()->has('message'))
    <div class="alert alert-success" >
        {{ session()->get('message') }}
    </div>
    <script>
      window.onload = function (){
        localStorage.removeItem('cartProduct');
      }
    </script>
@else
  <h1 class="display-5">Carrinho</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <form action="{{route('storeorder')}}" method="post">
    @csrf
  <div class="container mb-5 gap-1" id="produtos"></div>

  {{-- AREA DO ENDEREÇO --}}
  <div class="container bg-light border p-2">
    <span class="fs-3"> 
        Dados de entrega
    </span>
    <div class="row">
      <div class="row">
        <div class="col-sm-3">
          <label for="">Cep</label>
          <input class="form-control" type="text" name="zipcode" placeholder="Cep" class="d-block w-100">
        </div>
      </div>

      <div class="row">
          <div class="col-sm-6">
            <label for="">Logradouro</label>
            <input class="form-control" type="text" name="street" placeholder="Rua/Avenida" class="d-block w-100">
          </div>
          <div class="col-sm-3">
            <label for="">Número</label>
            <input class="form-control" type="text" name="number" placeholder="Nº" class="d-block w-100">
          </div>
          <div class="col-sm-3">
            <label for="">Complemento</label>
            <input class="form-control" type="text" name="complement" placeholder="Próximo a Praça" class="d-block w-100 ">
          </div>
      </div>

      <div class="row">
          <div class="col-sm-3">
            <label for="">Cidade</label>
            <input class="form-control" type="text" name="city" placeholder="Cidade" class="d-block w-100">
          </div>
          <div class="col-sm-3">
            <label for="">UF</label>
            <input class="form-control" type="text" name="uf" placeholder="Estado" class="d-block w-100">
          </div>
      </div>
    </div>
  </div>
  <div class="container p-2 text-end">
      <span class="d-block mb-3 fs-3">Valor Total: <span id="showValue"></span></span>      
      <input type="hidden"  id="product" name="product" value="">
      @if (Auth::user())
        <button type="submit" class="btn btn-success">Finalizar Compra</button>
      @endif
  </div>
  </form>
</div>
@endif
@stop
<script src="{{asset('/js/cart/cart.js')}}"></script>