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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'level' => 2
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'a1@gmail.com',
            'password' => bcrypt('123456'),
            'level' => 1
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'a2@gmail.com',
            'password' => bcrypt('123456'),
            'level' => 0
        ]);
    }
}
