<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'tpnds123@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ],

            [
               'name'=>'User',
               'email'=>'tapandas025@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
        ];
        foreach ($user as $key => $value) {

            User::create($value);

        }
    }
}
