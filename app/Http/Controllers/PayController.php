<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class PayController extends Controller
{
    
    public function pago(){

        $this->saveOrder();
 
        \Session::forget('cart');

        return \Redirect::route('home')
            ->with('message', 'Compra realizada de forma correcta');
    }
    protected function saveOrder(){
        $subtotal = 0;
		$cart = \Session::get('cart');
		$shipping = 0;

        foreach($cart as $producto){
			$subtotal += $producto->quantity * $producto->price;
		}
        $order = Order::create([
			'subtotal' => $subtotal,
			'shipping' => $shipping,
			'user_id' => \Auth::user()->id
		]);
        foreach ($cart as $producto) {
            $this->saveOrderItem($producto, $order->id);   
        }
    }

    protected function saveOrderItem($producto, $order_id){
        OrderItem::create([
            'price' => $producto->price,
            'quantity' => $producto->quantity,
            'product_id' => $producto->id,
            'order_id' => $order_id
        ]);
    }
}
