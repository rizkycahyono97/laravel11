<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rizky Cahyono',
            'username' => 'RizkyCahyono',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Intan Sukma Mahsuni',
            'username' => 'Intan Sukma',
            'email' => 'Intan@example.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('password')
        ]);
    }
}
