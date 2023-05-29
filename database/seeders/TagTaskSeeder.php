<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tag_task')->insert([
            ['tag_id' => 1, 'task_id' => 1],
            ['tag_id' => 1, 'task_id' => 2],
            ['tag_id' => 2, 'task_id' => 1],
            ['tag_id' => 2, 'task_id' => 3],
            ['tag_id' => 3, 'task_id' => 2],
            ['tag_id' => 3, 'task_id' => 4],
            ['tag_id' => 4, 'task_id' => 3],
            ['tag_id' => 4, 'task_id' => 1],
            ['tag_id' => 5, 'task_id' => 4],
            ['tag_id' => 5, 'task_id' => 2],
        ]);
    }
}
