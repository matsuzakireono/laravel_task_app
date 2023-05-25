<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Furniture;
use Faker\Factory as Faker;


class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('furniture')->truncate();
        Furniture::factory()->count(200)->create();
    }
}