<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use  Artisan;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' =>'Admin@mail.com',
            'password' => Hash::make('12345678'),
        ]);  
        
        Artisan::call('permission:create-role admin');
        Artisan::call('permission:create-role user');


        $user->assignRole('admin');
    }
}
