<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user1 = User::create([
            'name' => 'ali',
            'email' => 'ali@sot.com',
            'password' => Hash::make('password'),

        ]);
        $user1->assignRole('admin');


        $user2 = User::create([
            'name' => 'asad',
            'email' => 'asad@sot.com',
            'password' => Hash::make('password'),

        ]);
        $user2->assignRole('student');
       
    }
    
}