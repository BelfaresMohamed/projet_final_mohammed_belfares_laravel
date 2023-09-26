<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create( [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'azerty', // password
        ])->assignRole('admin');

        User::create( [
            'name' => 'mohamed',
            'email' => 'mohamed123@gmail.com',
            'email_verified_at' => now(),
            'password' => 'moha12345', // password
        ])->assignRole('user');

        User::create( [
            'name' => 'webmaster',
            'email' => 'webmaster@gmail.com',
            'email_verified_at' => now(),
            'password' => 'azerty', // password
        ])->assignRole('webmaster');
    }
}
