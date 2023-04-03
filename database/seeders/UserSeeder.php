<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Mary ',
            'email' => 'mary@gmail.com',
            'password' =>bcrypt('12345')
        ])->assignRole('Admin');

        User::create([
            'name'=> 'Luz',
            'email' => 'luz@gmail.com',
            'password' =>bcrypt('123')
        ])->assignRole('User');


        
    }
}
