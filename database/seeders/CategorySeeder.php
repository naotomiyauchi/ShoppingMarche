<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '黒毛和牛',
                'sort_order' => 1,
            ],
            [
                'name' => '肥後ポーク',
                'sort_order' => 2,
            ],
            [
                'name' => '赤牛',
                'sort_order' => 3,
            ],
            ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'A5',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'A4',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'A3',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'もも',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'むね',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'A5',
                'sort_order' => 6,
                'primary_category_id' => 3
            ],
            ]);

    
        }
}
