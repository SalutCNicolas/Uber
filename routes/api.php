<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipperController;


Route::get('products', [ProductController::class, 'listProducts']); // Liste de tous les articles

Route::post('client/product/', [ClientController::class, 'addproduct']); // Ajouter un produit au panier
Route::put('client/profile',[ClientController::class, 'createprofile']); // Saisir adresse + numéro de téléphone
Route::post('client/order', [ClientController::class, 'validateOrder']); // Valider la commande
Route::get('client/order/status', [ClientController::class, 'viewOrderClient']); // Consulter l'état de sa commande

Route::get('seller/order', [SellerController::class, 'viewOrderSeller']); // Voir les commandes passées par les clients
Route::put('seller/order/', [SellerController::class, 'processOrder']); // Traiter une commande ({process} = accept/refuse/ready)

Route::get('shipper/order', [ShipperController::class, 'viewOrderShipper']); // Voir les commandes à livrer
Route::put('shipper/order/', [ShipperController::class, 'processOrder']); // Traiter une commande ({process} = accept/refuse/shipped)
