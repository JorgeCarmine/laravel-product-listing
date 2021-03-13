<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'JYR-431',
                'order' => 1,
                'category_id' => 1,
            ]);
        DB::table('products')->insert(
            [
                'name' => 'JYR-433-PLATA',
                'order' => 2,
                'category_id' => 1,
            ]);
        DB::table('products')->insert(
            [
                'name' => 'JYR-432-NEGRO',
                'order' => 3,
                'category_id' => 1,
            ]);
        DB::table('products')->insert(
            [
                'name' => 'JYR-437-NEGRO',
                'order' => 4,
                'category_id' => 1,
            ]);
    }
}
