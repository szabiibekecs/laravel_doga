<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'user1',
                'role' => 'user',
                'email' => 'user@user.com',
                'password'=>'aaa'
            ],
            [
                'name' => 'admin1',
                'role' => 'admin',
                'email' => 'admin@admin.com',
                'password'=>'aaa'
            ]
        ]);

        User::factory()->count(50)->create();
    }
}
