<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'task_name' => 'laravel勉強',
                'user_id' => 1,
                'category_id' => 1,
                'deadline' => now()->addDays(3), // 3日後の日付と時間を設定
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task_name' => 'サーバー勉強',
                'user_id' => 2,
                'category_id' => 1,
                'deadline' => now()->addDays(5), // 5日後の日付と時間を設定
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task_name' => 'Vue.js勉強',
                'user_id' => 1,
                'category_id' => 1,
                'deadline' => now()->addDays(7), // 7日後の日付と時間を設定
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task_name' => '消しゴムを買う',
                'user_id' => 2,
                'category_id' => 1,
                'deadline' => now()->addDays(2), // 2日後の日付と時間を設定
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}