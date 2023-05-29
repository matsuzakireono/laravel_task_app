<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tag_name' => 'お買い物',
            ],
            [
                'tag_name' => '勉強',
            ],
            [
                'tag_name' => 'laravel',
            ],
            [
                'tag_name' => 'サーバー',
            ],
            [
                'tag_name' => '予定',
            ],
            [
                'tag_name' => '食事',
            ],
            [
                'tag_name' => 'タグ1',
            ],
            [
                'tag_name' => 'タグ2',
            ],
            [
                'tag_name' => 'タグ3',
            ],
            [
                'tag_name' => 'タグ4',
            ],
        ]);
    }
}
