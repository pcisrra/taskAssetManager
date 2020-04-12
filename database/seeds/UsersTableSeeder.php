<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Isrrael Peña',
                'email'          => 'isrrael@pcisrra.com',
                'password'       => '$2y$10$klMk23bkex0GPof.aH8e5e8x7OE7XfbXH/NTaVl/JUVXJIJ102hAK',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
