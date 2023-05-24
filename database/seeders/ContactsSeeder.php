<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'gender' => 1,
                'age' => 25,
                'message' => 'Hello, this is a message from John Doe.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'gender' => 2,
                'age' => 30,
                'message' => 'Hello, this is a message from Jane Smith.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Reono Matsuzaki',
                'email' => 'reonomatsuzaki@example.com',
                'gender' => 1,
                'age' => 25,
                'message' => 'Hello, this is a message from Reono Matsuzaki.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // さらに追加のダミーデータをここに追記してください
        ];

        DB::table('contacts')->insert($data);
    }
}
