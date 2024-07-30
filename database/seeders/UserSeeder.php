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
     */
    public function run(): void
    {
        $existsUser = User::where('email', 'rpsohag.bd@gmail.com')->first();
        if(is_null($existsUser)){
            $user = new User();
            $user->name = "RP SOHAG";
            $user->email = "rpsohag.bd@gmail.com";
            $user->password = Hash::make("rootpassword");
            $user->save();
        }

    }
}
