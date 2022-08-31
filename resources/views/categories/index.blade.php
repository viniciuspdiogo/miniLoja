@extends('layout.principal')
@section('title','Categorias')
@section('content')
    @if ($categorys)
        <ul class="list-group">
            @foreach ($categorys as $category)
            <li class="list-group-item">
                <a class="text-muted" href="/?search={{$category->name}}" title="Ver os Produtos">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>   
    @else
        <h1 class="fs-1">Não tem categorias cadastradas</h1>
    @endif
    
@stop