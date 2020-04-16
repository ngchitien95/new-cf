<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'admin',
                'email' => 'ngchitien95@gmail.com',
                'password' => bcrypt('123456789'),
                'level' => 2,
            ],
             [
                 'name' => 'Đông Hee',
                 'email' => 'dongdontcare@gmail.com',
                 'password' => bcrypt('123456789'),
                 'level' => 1,
             ],
             [
                 'name' => 'Công Hữu',
                 'email' => 'huuhoiham@gmail.com',
                 'password' => bcrypt('123456789'),
                 'level' => 1,
             ]
         ]);
     }
}
