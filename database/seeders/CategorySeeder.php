<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fashion1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Home Appliance1s', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
