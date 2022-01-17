<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => env(key:'ADMIN_NAME'),
            'email' => env(key:'ADMIN_EMAIL'),
            'password' => bcrypt(env(key:'ADMIN_PASSWORD')),
        ]);
    }
}
