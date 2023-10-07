<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Organzation',
               'email'=>'organzation@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Helping Center',
               'email'=>'helpingcenter@gmail.com',
               'type'=>3,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'type'=>4,
                'password'=> bcrypt('123456'),
             ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
