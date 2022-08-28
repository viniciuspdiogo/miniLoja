@extends('layout.principal')
@section('title','Página Principal')
@section('content')
    @if ($categorys)
        <ul class="list-group">
            @foreach ($categorys as $category)
            <li class="list-group-item">
                {{$category->name}}
            </li>
            @endforeach
        </ul>   
    @else
        <h1 class="fs-1">Não tem categorias cadastradas</h1>
    @endif
    
@stop