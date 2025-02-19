<?php

namespace Database\Seeders;

use DB;
use App\Models\Login;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Login::create([
            'name' => 'IbuKost',
            'email' => 'IbuKost1234@gmail.com',
            'password' => 'password',
        ]);
    }
}
