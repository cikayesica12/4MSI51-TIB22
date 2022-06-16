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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Erawati Efendi", 
            "email"=>"erawatiefendi@gmail.com",
            "password"=>Hash::make("erawati123")
        ]);

        User::create([
            "name"=>"Silvia", 
            "email"=>"silvia@gmail.com",
            "password"=>Hash::make("silvia234")
        ]);

        User::create([
            "name"=>"Yesica Christina", 
            "email"=>"yesicachristina@gmail.com",
            "password"=>Hash::make("yesica345")
        ]);
    }
}
