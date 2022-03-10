<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@awssports.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('P@ssw0rd123!'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
