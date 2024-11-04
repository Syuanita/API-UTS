<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'product_id' => 1,  // Assuming this product exists in the products table
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 2,  // Assuming this product exists in the products table
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 3,  // Assuming this product exists in the products table
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
