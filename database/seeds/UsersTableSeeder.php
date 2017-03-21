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
        DB::table('users')->insert([
            'name'=>'刘丹霞',
            'password'=>bcrypt('123456'),
            'email'=>'liudanxia@onebest.cn',
            'role_id'=>1,
            'city'=>'上海',
            'status'=>'1',
            'user_id'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
