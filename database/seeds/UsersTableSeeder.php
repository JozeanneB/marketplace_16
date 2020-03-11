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
        \DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => 'root@2020', // password
                'remember_token' => 'akakakakakaka',
            ]
        );
        /*
        // Cria 10 usuários com dados da biblioteca faker
        factory(\App\User::class, 10)->create();
        */
    }
}
