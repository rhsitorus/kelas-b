<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::insert([
        //     'username' => 'abc12',
        //     'password' => 'abc123',
        //     'active' => true,
        //     'foto' => 'default.png',
        //     'level' => 'admin'
        // ]);
        factory(User::class, 50)->create();
    }
}
