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
    public $price;
    public $subTotal;
    public $rowId;
    public $myCart=[];


    public function mount(){
       $cart=$this->cartItems=Cart::content();
//       $this->quantity=$cart->qty;

    }

    public function updateCart(){
        session('success','Product ordered successfully');
        dd(33);
        Cart::update($this->rowId, $this->quantity);
    }


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
