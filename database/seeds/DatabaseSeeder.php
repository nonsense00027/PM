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

        // DB::table('users')->insert([
        //     'name'=>'IT',
        //     'email'=>'admin@it.com',
        //     'password'=>Hash::make('itpass'),
        //     'role'=>'Admin'
        // ]);
        
        DB::table('users')->insert([
            'name'=>'HR',
            'email'=>'admin@hr.com',
            'password'=>Hash::make('hrpass'),
            'role'=>'User'
        ]);
    }
}
