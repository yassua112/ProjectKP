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
                'name' => 'Admin',
                'username'=> 'admin',
                'email'=>'admin@gmial.com',
                'role' => '1',
                'password' => bcrypt('admin1234')
            ],
        ]);
    }
}
