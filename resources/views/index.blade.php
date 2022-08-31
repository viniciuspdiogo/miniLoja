@extends('layout.principal')
@section('title','Página Principal')
@section('content')
<div class="d-flex flex-row justify-content-center align-items-start flex-wrap gap-3 p-2 bg-light border">
    @if (isset($products))
    <div class="container">
        <form action="/" method="GET">
            <div class="col-sm-3 input-group rounded">
                <input type="search" class="form-control rounded" name="search" placeholder="Pesquisar Produtos" aria-label="Search" aria-describedby="search-addon" />
                <button type='submit' class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    @foreach ($products as $product)
        <div class="card p-2" style="width: 18rem;min-height:478px;">
            <img src="{{asset($product->image)}}" class="card-img-top" alt="Imagem do Produto - {{ $product->name }}">
            <div class="card-body">
                <h5 class="card-title" style="min-height:48px">{{ $product->name }}</h5>
                <small class="card-text">
                    {{$product->categories}}
                </small>
                <p class="card-text">
                    R$ {{$product->price}}
                </p>
                <a href="{{route('product',['id' => $product->id])}}" class="btn btn-success">Ver Produto</a>
            </div>
        </div>    
    @endforeach
    @else
        <h1>
            {{$error}}
        </h1>
    @endif
    
    
</div>
    
@stop