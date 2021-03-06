<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Usuário 1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Usuário 2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
