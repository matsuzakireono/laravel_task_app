<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'User1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password1')
            ],
            [
                'name' => 'User2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password2')
            ],
            [
                'name' => 'User3',
                'email' => 'user3@example.com',
                'password' => Hash::make('password3')
            ],
            [
                'name' => 'User4',
                'email' => 'user4@example.com',
                'password' => Hash::make('password4')
            ],
            [
                'name' => 'User5',
                'email' => 'user5@example.com',
                'password' => Hash::make('password5')
            ],
            [
                'name' => 'User6',
                'email' => 'user6@example.com',
                'password' => Hash::make('password6')
            ],
            [
                'name' => 'User7',
                'email' => 'user7@example.com',
                'password' => Hash::make('password7')
            ],
            [
                'name' => 'User8',
                'email' => 'user8@example.com',
                'password' => Hash::make('password8')
            ],
            [
                'name' => 'User9',
                'email' => 'user9@example.com',
                'password' => Hash::make('password9')
            ],
            [
                'name' => 'User10',
                'email' => 'user10@example.com',
                'password' => Hash::make('password10')
            ],
        ];

        // ユーザーデータをテーブルに挿入
        DB::table('users')->insert($userData);
    }
}