<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('products')->insert([
        'name' => "GeForce RTX 3090",
        'image' => "images/rtx3090.jpg",
        'price' => 8599.99,
        'description' => "Placa de Vídeo Zotac NVIDIA GeForce RTX 3090 Trinity The Ultimate Play A placa de vídeo GeForce RTX™ 3090 conta com a tecnologia Ampere — a 2ª geração da arquitetura RTX da NVIDIA.",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "GeForce RTX 3060",
        'image' => "images/rtx3060.jpg",
        'price' => 2699.99,
        'description' => "Placa de Vídeo Gigabyte GeForce RTX 3060 Gaming OC 12G (rev. 2.0) LHR Sistema de Refrigeração Windforce 3X.",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "GeForce RTX 3070",
        'image' => "images/rt3070.jpg",
        'price' => 4099.90,
        'description' => "Placa de Vídeo MSI NVIDIA GeForce RTX 3070 Gaming Z Trio 8G, 8GB GDDR6, LHR, RGB, DLSS, Ray Tracing.",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);


       DB::table('products')->insert([
        'name' => "Kingston Fury Beast, RGB, 8GB",
        'image' => "images/Kingston_Fury_Beast.jpg",
        'price' => 239.99,
        'description' => "Memória Kingston Fury Beast RGB A memória Kingston FURY Beast DDR4 RGB",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "Corsair Vengeance LPX, 8GB, 2666MHz",
        'image' => "images/vengeance_8gb.jpg",
        'price' => 199.99,
        'description' => "Memória Corsair Vengeance LPX",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "XPG Spectrix D41 TUF, RGB, 8GB, 3200MHz",
        'image' => "images/spectrix_8gb.jpg",
        'price' => 249.99,
        'description' => "Memória XPG Spectrix D41 TUF, RGB,  8GB, 3200MHz, DDR4, CL16.",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "Gigabyte Z690 Aero D",
        'image' => "images/z690gigabyte.jpg",
        'price' => 5269.90,
        'description' => "As placas-mãe da série AERO são uma nova abordagem para os criadores que evoluem com recursos otimizados para a criação de conteúdo.",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "Asus ROG MAXIMUS Z690 EXTREME",
        'image' => "images/z690.jpg",
        'price' => 9299.00,
        'description' => "Placa-mãe Asus ROG MAXIMUS Z690 EXTREME, Intel 1700 Z690, DDR5, EATX",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

       DB::table('products')->insert([
        'name' => "Gigabyte B660M Aorus PRO",
        'image' => "images/b660m.jpg",
        'price' => 1219.99,
        'description' => "laca Mãe Gigabyte B660M Aorus PRO, Intel LGA 1700, mATX, DDR4, M.2 NVME - B660M AORUS PRO DDR4",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
    }
}
