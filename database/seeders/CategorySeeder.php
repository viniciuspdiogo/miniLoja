<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Hardware",            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "Placa de Vídeo",            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "Memória Ram",            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "Placa Mãe",            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
