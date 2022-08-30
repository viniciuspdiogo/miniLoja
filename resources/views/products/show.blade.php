@extends('layout.principal')
@section('title','Produto')
@section('content')
    @if($product)
        <div class="container ">
            
            @foreach ($product as $productData)
                <h1 class="display-5">
                    {{$productData->name}}<small class="fs-6"> / {{str_replace(",", ", ",$productData->categories)}}</small>
                </h1>
                <div class="border d-flex justify-content-center">
                    <figure class="figure w-50 m-0">
                        <img src="{{asset($productData->image)}}" alt="Imagem da - {{$productData->name}}" class="figure-img img-fluid rounded m-0">
                    </figure>
                </div>
                <div>
                    <p class="text-lg-start bg-light p-2 border">
                        {{$productData->description}}
                    </p>
                    <span class="text-lg-start fs-2">
                        R$ {{$productData->price}}
                    </span>
                </div>
                <div>
                    <button id="addCart" onclick="InputInCart({{json_encode($product)}},this)" class="btn btn-success" role="button">
                        <i class="fa-solid fa-cart-arrow-down" id="loading-icon"></i>
                        Adicionar ao Carrinho
                    </button>
                    
                </div>
            @endforeach
        </div>
    @else
        <div class="container min-vh-100">
            <h1 class="text-center">
                Produto não encontrado
            </h1>
        </div>
    @endif
@stop
<script src="{{asset('/js/product/product.js')}}"></script>
