# TP - MyUBER

> Membres : Nicolas N'GUYEN et François BONNIN

## 1. Installation :
   - composer : `composer install`

## 2. Database :
   - `php artisan migrate:fresh`
   - `php artisan db:seed`

## 3. Requêtes :

#### Liste de tous les articles :
```| GET|HEAD | api/products                  | App\Http\Controllers\ProductController@listProducts     |```


### API Client :
#### Ajouter des produits au panier (passer un produit en paramètre (format x-www-form-urlencoded)) : 
```| POST     | api/client/product            | App\Http\Controllers\ClientController@addproduct        |```

#### Saisir l'adresse + numéro de téléphone (passer les arguments en paramètre (format x-www-form-urlencoded)) :
```| PUT      | api/client/profile            | App\Http\Controllers\ClientController@createprofile     |```

#### Valider la commande:
```| POST     | api/client/order              | App\Http\Controllers\ClientController@validateOrder     |```

#### Consulter l'état de sa commande :
```| GET|HEAD | api/client/order/status       | App\Http\Controllers\ClientController@viewOrderClient   |```

<hr>

### API Restaurant :
#### Voir les commandes passées par les clients :
```| GET|HEAD | api/seller/order              | App\Http\Controllers\SellerController@viewOrderSeller   |```

#### Traiter une commande (passer l'idOrder et le process en format x-www-form-urlencoded) :
```| PUT      | api/seller/order/  | App\Http\Controllers\SellerController@processOrder      |```
*process = accept/refuse/ready*

<hr>

### API Livreur :
#### Voir les commandes à livrer :
```| GET|HEAD | api/shipper/order              | App\Http\Controllers\ShipperController@viewOrderShipper |```

#### Traiter une commande ((passer l'idOrder et le process en format x-www-form-urlencoded):
```| PUT      | api/shipper/order/ | App\Http\Controllers\ShipperController@processOrder     |```
*process = accept/refuse/shipped*