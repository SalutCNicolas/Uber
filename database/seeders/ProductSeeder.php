<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['description'=> 'Pizza 1'],
            ['description'=> 'Pizza 2'],
            ['description'=> 'Pizza 3']
        ]);
    }
}
