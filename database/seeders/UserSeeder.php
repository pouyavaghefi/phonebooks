<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            array(
                [
                    'uname' => '',
                    'fname' => 'اکانت',
                    'lname' => 'دمو',
                    'email' => 'demo@email.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('123456'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            )
        );
    }
}
