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
            'name'=>'Information Technology',
            'email'=>'admin@it.com',
            'password'=>Hash::make('itpass'),
            'role'=>'Admin'
        ]);
        
        DB::table('users')->insert([
            'name'=>'Human Resource',
            'email'=>'admin@hr.com',
            'password'=>Hash::make('hrpass'),
            'role'=>'User'
        ]);
    }
}
