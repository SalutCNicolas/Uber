<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seller;
use Illuminate\Http\Request;



class SellerController extends Controller
{
    public function viewOrderSeller(){
        // Voir les commandes passées par les clients
        $orders = Order::where('validatebyClient','1')->get();
        return $orders;
    }

    public function processOrder(Request $request){
        // Traiter une commande

        $order = Order::find($request -> idOrder);
        switch ($request -> process) {
            case "accept":
                $order -> state = "seller_accept";
                break;
            case "refuse":
                $order -> state = "seller_refuse";
                break;
            case "ready":
                $order -> state = "seller_ready";
                break;
        }

        $order -> save();
        return "Order status : " .  $order ->state;

    }
}
