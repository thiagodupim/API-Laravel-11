<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'thiago@laravel.com.br')->first()){
            User::create([
                'name' => 'Thiago',
                'email' => 'thiago@laravel.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'tamara@laravel.com.br')->first()){
            User::create([
                'name' => 'Tamara',
                'email' => 'Tamara@laravel.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'giseli@laravel.com.br')->first()){
            User::create([
                'name' => 'Giseli',
                'email' => 'giseli@laravel.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'thays@laravel.com.br')->first()){
            User::create([
                'name' => 'Thays',
                'email' => 'thays@laravel.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
    }
}