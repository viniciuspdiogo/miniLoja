<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
    ];


    public function GetAll(){
        return $products = DB::select("select prod.*, GROUP_CONCAT(cat.name separator ',') as 'categories' from blueservice.products as prod
        inner join  blueservice.categorys_products as cp on cp.id_product = prod.id
        inner join blueservice.categories as cat on cat.id = cp.id_category
        group by prod.id order by prod.id ASC");
    }

    public function GetUnique($id){
        return $products = DB::select("select prod.*, GROUP_CONCAT(cat.name separator ',') as 'categories' from blueservice.products as prod
        inner join  blueservice.categorys_products as cp on cp.id_product = prod.id
        inner join blueservice.categories as cat on cat.id = cp.id_category
        where prod.id =".$id."
        group by prod.id order by prod.id ASC");
    }

    public function GetSearch($search){
        return $products = DB::select("select prod.*, GROUP_CONCAT(cat.name separator ',') as 'categories' from blueservice.products as prod
        inner join  blueservice.categorys_products as cp on cp.id_product = prod.id
        inner join blueservice.categories as cat on cat.id = cp.id_category
        where prod.name like'%".$search."%' or cat.name like'%".$search."%'
        group by prod.id order by prod.id ASC");
    }
}
