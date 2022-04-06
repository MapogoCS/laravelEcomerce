<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        
        // \App\Models\User::factory(10)->create();
        Admin::create([
            'email' => 'superadmin@mail.com',
            'password' =>Hash::make('123456789'),
            'city' => 'Egypt',
            'region' => 'Cairo',
            'name' => 'Ahmed Helmy',
            'phone' => '01112131415',
            'address' => '3 st cairo, cairo',  
       ]);

       //create two admin for this system 
       Admin::create([
        'email' => 'admin1@mail.com',
        'password' =>Hash::make('123456789'),
        'city' => 'Egypt',
        'region' => 'Cairo',
        'name' => 'mostafa Ibrahim',
        'phone' => '011121415',
        'address' => '3 st cairo, cairo',
      ]);

      Admin::create([
        'email' => 'heba@mail.com',
        'password' =>Hash::make('123456789'),
        'city' => 'ALex',
        'region' => 'loran',
        'name' => 'Heba Ibrahim',
        'phone' => '011121415',
        'address' => '3 st cairo, cairo',
  ]);

    }
}
