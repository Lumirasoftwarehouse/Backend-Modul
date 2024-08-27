<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'sd',
            'email' => 'sd@gmail.com',
            'password' => Hash::make('12345'),
            'level' => '0',
        ]);
        User::create([
            'name' => 'smp',
            'email' => 'smp@gmail.com',
            'password' => Hash::make('12345'),
            'level' => '1',
        ]);
        User::create([
            'name' => 'sma',
            'email' => 'sma@gmail.com',
            'password' => Hash::make('12345'),
            'level' => '2',
        ]);
    }
}
