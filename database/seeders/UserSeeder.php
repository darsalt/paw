<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345')
        ])->each(function(User $user) {
            $user->assignRole('admin');
        });

        User::factory(1)->create([
            'name' => 'vendedor',
            'email' => 'vendedor@gmail.com',
            'password' => Hash::make('12345')
        ])->each(function(User $user) {
            $user->assignRole('vendedor');
        });

        User::factory(1)->create([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('12345')
        ])->each(function(User $user) {
            $user->assignRole('cliente');
        });
    }
}
