<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            'id' => mt_rand(1, 999),
            'title' => Str::random(10),
            'desc' => Str::random(30),
            'status' => mt_rand(0, 2),
            'user_id' => mt_rand(1, 999),
        ]);

    }
}
