<?php

use App\Enums\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Fallout',
            'price' => 1.99,
            'currency' => Currency::USD,
        ]);

        DB::table('products')->insert([
            'name' => 'Don\'t Starve',
            'price' => 2.99,
            'currency' => Currency::USD,
        ]);

        DB::table('products')->insert([
            'name' => 'Baldur\'s Gate',
            'price' => 3.99,
            'currency' => Currency::USD,
        ]);

        DB::table('products')->insert([
            'name' => 'Icewind Dale',
            'price' => 4.99,
            'currency' => Currency::USD,
        ]);

        DB::table('products')->insert([
            'name' => 'Bloodborne',
            'price' => 5.99,
            'currency' => Currency::USD,
        ]);
    }
}
