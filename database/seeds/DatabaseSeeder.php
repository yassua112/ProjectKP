<?php

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
        DB::table('users') -> insert([
            [
                'id_admin' => '1',
                'name' => 'Admin',
                'username'=> 'admin',
                'role' => '1',
                'password' => bcrypt('admin1234')
            ],
        ]);
    }
}
