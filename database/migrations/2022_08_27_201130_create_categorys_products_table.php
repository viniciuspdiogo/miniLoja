<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys_products', function (Blueprint $table) {
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_category');
            $table->timestamps();
            $table->primary(['id_product','id_category']);
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys_products');
    }
};
