<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::firstOrCreate([
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@ditems.com',
            'password'=> Hash::make('123456789'),
            'isActive' => 1
        ]);

    }
}
