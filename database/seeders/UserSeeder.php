<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ユーザーデータの配列を定義
        $userData = [];
        // $faker = Faker::create();
        // for ($i = 0; $i < 200; $i++) {
        //     $userData[] = [
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make('password'),
        //     ];
        // }
        $userData = [
            'name' => 'Reono Matsuzaki',
            'email' => 'reono@reono.com',
            'password' => Hash::make('password')
        ];

        // ユーザーデータをテーブルに挿入
        DB::table('users')->insert($userData);
    }
}
