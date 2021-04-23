<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $user->name = 'Angelo';
        $user->email = 'angelomjm2202@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

    }
}
