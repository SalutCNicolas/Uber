<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class ShipperController extends Controller
{
    public function viewOrderShipper(){
        // Voir les commandes seller_accept
        $orders = Order::where('state', 'seller_ready')->get();
        return $orders;
    }

    public function processOrder(Request $request){
        // Traite une commande

        $order = Order::find($request -> idOrder);
        switch ($request -> process) {
            case "accept":
                $order -> state = "shipping_in_progress";
                break;
            case "refuse":
                $order -> state = "seller_ready";
                break;
            case "shipped":
                $order -> state = "shipped";
                break;
        }

        $order -> save();
        return "Order status : " . $order ->state;

    }
}
