<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorysProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Todos os Produtos
        DB::table('categorys_products')->insert([
            'id_product' => 1,            
            'id_category' => 1,            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 2,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 3,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 4,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 5,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 6,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 7,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 8,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 9,            
            'id_category' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Placas de Vídeo
        DB::table('categorys_products')->insert([
            'id_product' => 1,            
            'id_category' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 2,            
            'id_category' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 3,            
            'id_category' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Memórias Ram
        DB::table('categorys_products')->insert([
            'id_product' => 4,            
            'id_category' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 5,            
            'id_category' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 6,            
            'id_category' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Memórias Ram
        DB::table('categorys_products')->insert([
            'id_product' => 7,            
            'id_category' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 8,            
            'id_category' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categorys_products')->insert([
            'id_product' => 9,            
            'id_category' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
