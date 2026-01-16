<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Gabriel',
            'email' => 'ogabrielgodoy@hotmail.com',
            'password' => '123456',
        ]);
    }
}
