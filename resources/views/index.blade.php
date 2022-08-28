@extends('layout.principal')
@section('title','Página Principal')
@section('content')
<div class="d-flex flex-row justify-content-center align-items-start flex-wrap gap-3 p-2 bg-light border">
    @if (isset($products))
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