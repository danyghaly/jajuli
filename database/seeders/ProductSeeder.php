<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = collect([
            new Product([
                'name' => 'Udang',
                'quantity' => 1000,
                'category' => 'udang',
                'type' => 'fresh',
                'price' => 5000,
                'description' => 'size 100',
            ])
        ]);
        $products->each(function (Product $product) {
            $product->save();
        });
    }
}
