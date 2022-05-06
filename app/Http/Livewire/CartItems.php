<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartItems extends Component
{
    public $cartItems=[];
    public $products=[];
    public $total;
    public $ProdId;
    public $tax;
    public $quantity;


    public function proceed(){
        //$this->redirect('client/dashboard');
        $this->cartItems=Cart::content();
        foreach ($this->cartItems as $ct){
            $order=new Order();
            $order->product_id=$ct->id;
            $order->client_id=session('ClientInfo')->id;
            $order->price=$ct->price;
            $order->quantity=$ct->qty;
            $order->sub_total=$ct->total;
            $order->save();
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mista.io/sms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('to' => '+250780331198',
                'from' => 'bestshoprw',
                'unicode' => '0',
                'sms' => 'Hello from Mr SMS',
                'action' => 'send-sms'),
            CURLOPT_HTTPHEADER => array(
                'x-api-key: a2sya21rZ2R1OHJoeXMza3JjdXVpNXRqYzdoOHJnMDk=)'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
        return redirect('client/dashboard')->with('success','Product ordered successfully');
    }

    public function getProduct($ProdId){
        return $this->products=Product::where('ProdId',$ProdId);
    }

    public function deleteCart($row){
        Cart::remove($row);
    }

    public function getCart($row){

    }

    public function render()
    {
        Cart::setGlobalTax(0);
        $this->cartItems=Cart::content();
        $this->total=Cart::total();
        return view('livewire.cart-items');
    }
}
