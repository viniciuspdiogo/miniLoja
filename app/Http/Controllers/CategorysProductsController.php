<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorysProductsRequest;
use App\Http\Requests\UpdateCategorysProductsRequest;
use App\Models\CategorysProducts;

class CategorysProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorysProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorysProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorysProducts  $categorysProducts
     * @return \Illuminate\Http\Response
     */
    public function show(CategorysProducts $categorysProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorysProducts  $categorysProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorysProducts $categorysProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorysProductsRequest  $request
     * @param  \App\Models\CategorysProducts  $categorysProducts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorysProductsRequest $request, CategorysProducts $categorysProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorysProducts  $categorysProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorysProducts $categorysProducts)
    {
        //
    }
}
