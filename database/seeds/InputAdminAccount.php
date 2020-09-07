<?php

use Illuminate\Database\Seeder;

class InputAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Administrator',
            'email' => 'administrator@laravel.dev',
            'password' => Hash::make('Administrator123'),
        ]);
    }
}
