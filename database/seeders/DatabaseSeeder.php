<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Faz a inserção dos dados nas tabelas indicadas.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        /**
         * Efetua a inserção dos dados na tabela específicada.
         *
         * @return void
         */
        $this->call(UsersTableSeeder::class);
    }
}
