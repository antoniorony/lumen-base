<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => app('hash')->make('admin'),
            'created_at' => $faker->dateTimeBetween(),
            'updated_at' => $faker->dateTimeBetween(),
        ]);
    }
}
