<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellers = Seller::create([
            'name'=> 'Jean Dujardin',
            'processing'=>'Shipped',
        ]);

        DB::table('shippers')->insert([
            'seller_id'=> $sellers->id,
            'name'=> 'Pizzeria',
        ]);
    }
}
