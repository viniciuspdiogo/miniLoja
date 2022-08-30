<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['codoerders','valuetotal','id_user'];


    public function GetAll()
    {
        $orders = DB::table('orders')
                    ->join('users','orders.id_user','=','users.id')
                    ->select('orders.*','users.name')
                    ->get();

        $count = count($orders);

        if($count > 0)
        {
            return $orders;
        }
        return null;
        
    }
}
