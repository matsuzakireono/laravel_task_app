<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'カテゴリ1',
            ],
            [
                'category_name' => 'カテゴリ2',
            ],
            [
                'category_name' => 'カテゴリ3',
            ],
            [
                'category_name' => 'カテゴリ4',
            ],
            [
                'category_name' => 'カテゴリ5',
            ],
            [
                'category_name' => 'カテゴリ6',
            ],
            [
                'category_name' => 'カテゴリ7',
            ],
            [
                'category_name' => 'カテゴリ8',
            ],
            [
                'category_name' => 'カテゴリ9',
            ],
            [
                'category_name' => 'カテゴリ10',
            ],
        ]);
    }
}
