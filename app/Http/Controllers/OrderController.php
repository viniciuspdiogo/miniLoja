<?php

namespace App\Http\Controllers;

use App\Exceptions\OrderException;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\{
    Adress,
    Order,
    OrderProducts
};

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Array_;

class OrderController extends Controller
{

    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->order->GetAll();
    
        return view('orders.index',compact('orders'));
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {

        try {
       
            $valueTotal = 0;
            $products = json_decode($request->product);
        
            foreach($products as $product){
                $valueTotal += $product->price * $product->quant;
            }

            $codeOrder = uniqid();

            $storeOrderId = $this->order->create([
                'codeorders' => uniqid(),
                'valuetotal' => $valueTotal,
                'id_user' => Auth::user()->id,
            ])->id;

            if($storeOrderId){
                $adress = [
                    'zipcode' => $request->zipcode,
                    'street' => $request->street,
                    'number' => $request->number,
                    'complement' => $request->complement,
                    'city' => $request->city,
                    'uf' => $request->uf,
                    'id_order' => $storeOrderId,
                ];

                $storeAdress = new Adress();
                $storeAdress->create([
                    'zipcode' => $request->zipcode,
                    'street' => $request->street,
                    'number' => $request->number,
                    'complement' => $request->complement,
                    'city' => $request->city,
                    'uf' => $request->uf,
                    'id_order' => $storeOrderId,
                ])->id;
                
                $teste =0;
                foreach($products as $product){
                    $teste +=$product->id;
                    $storeProducts = new OrderProducts();
                    $storeProducts->create([
                        'id_order' => $storeOrderId,
                        'id_product' => $product->id,
                    ]);
                }
            }

            return redirect()->back()->with('message','Compra realizada com Sucesso!');

        } catch (\Throwable $th) {
            throw new OrderException($message = 'Erro no Processo',1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
