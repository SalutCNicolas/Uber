<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Order;

class ClientController extends Controller
{
    public function createprofile(Request $request){
        // Modification des informations du client
        $client = Client::find(1);
        $order = Order::find(1);
        $client -> phone = $request ->phone;
        $client -> adresse = $request ->adresse;
        $client -> cart_id = $order -> id;
        $client -> save();

        return $client;
    }

    public function addproduct(Request $request){
        // Ajoute les produits aux panier
        $order = Order::find(1);
        $idProduct = $request -> idProduct;
        $order -> product() -> attach($idProduct);
        $order -> save();
        return $order -> product;
    }

    public function validateOrder(){
        // Validation de la commande par le client
        $order = Order::find(1);
        $order -> validatebyClient = '1';
        $order -> save();
        return "Order validated";

    }

    public function viewOrderClient(){
        // Consulter l'état de sa commande
        $order = Order::find(1);
        return $order -> state;
    }
}
