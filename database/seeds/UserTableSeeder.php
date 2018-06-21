<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Leo',
                'last_name' => 'Placencia',
                'email' => 'leo@gmail.com',
                'user' => 'annihileitor',
                'password' => \Hash::make('admin123'),
                'type' => 'admin',
                'active' => 1,
                'address' => 'Ob Ed',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'User',
                'last_name' => 'Usuario',
                'email' => 'user@gmail.com',
                'user' => 'user',
                'password' => \Hash::make('user123'),
                'type' => 'user',
                'active' => 1,
                'address' => 'us us',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );
        User::insert($data);
    }
}
