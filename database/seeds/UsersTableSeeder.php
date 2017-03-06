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

         for ($i=1; $i < 20; $i++) { 
        DB::table('user_table')->insert([
            'username' => str_random(10),
            'useremail' => str_random(10).'@gmail.com',
            'userpassword' => bcrypt('password'),
            'userlevel'=>str_random(0,9999),
            'userhead'=>database_path('/upload/'.rand(111111,99999).time().'.jpg'),
            'userphone'=>'135'.rand(11111111,99999999),
            'userqq'=>str_random(7),
            'userstatus'=>'0'
        ]);
        }
    }
}
