<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone1',
                'price' => 299.99,
                'description' => 'A high-quality smartphone',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'T-shirt1',
                'price' => 19.99,
                'description' => 'A comfortable cotton T-shirt',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Microwave Oven1',
                'price' => 99.99,
                'description' => 'A fast and efficient microwave oven',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
