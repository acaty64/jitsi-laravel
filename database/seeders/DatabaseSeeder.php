<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $user = User::find(1);
        $user->name = "master";
        $user->email = "aarashiro@ucss.edu.pe";
        $user->save();
    }
}
