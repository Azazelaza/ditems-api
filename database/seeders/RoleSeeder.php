<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'section' => 'Products'
        ]);
        
        Role::firstOrCreate([
            'section' => 'Membership'
        ]);
        
        Role::firstOrCreate([
            'section' => 'Tickets'
        ]);
        
        Role::firstOrCreate([
            'section' => 'Users'
        ]);

        Role::firstOrCreate([
            'section' => 'Orders'
        ]);
        
        Role::firstOrCreate([
            'section' => 'Logs'
        ]);
    }
}
