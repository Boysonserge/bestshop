<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashCards extends Component
{
    public $clients,$products,$sales,$messageUsage;


    public function getNumbers(){
        $this->clients=count(Client::all());
        $this->products=count(Product::all());
        $this->sales=count(Order::all());
        $this->messageUsage=5;
    }
    public function render()
    {
        $this->getNumbers();
        $orders=DB::table('orders')
            ->join('clients','clients.id','orders.client_id')
            ->join('products','products.id','=','orders.product_id')

            ->select('orders.*','products.productName','products.productCode','clients.names','clients.phone')
        ->get();
        return view('livewire.dash-cards')->with('orders',$orders);
    }
}
