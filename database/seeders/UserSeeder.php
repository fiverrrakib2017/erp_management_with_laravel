<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rakib Mahmud',
            'username' => 'rakibas375',
            'phone_number' => '01757967432',
            'email' => 'rakibas375@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('iloverakib'),
            'user_type' => 1,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Shakib Mahmud',
            'username' => 'shakib',
            'phone_number' => '01757967431',
            'email' => 'shakib@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('iloverakib'),
            'user_type' => 1,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
