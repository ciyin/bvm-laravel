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
        DB::table('users')->insert(array(
            0 => array(
                'name'=>'刘丹霞',
                'password'=>bcrypt('liuCIyin826'),
                'email'=>'liudanxia@onebest.cn',
                'role_id'=>1,
                'city'=>'上海',
                'status'=>'使用中',
                'user_id'=>'1',
                'remember_token'=>'Z0Q4krKMNsvfUWFNHeuoVfqeBlmuBLCO8bkfxXDrAvGAVMi6Yp...',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            1 => array(
                'name'=>'测试账号1',
                'password'=>bcrypt('123456'),
                'email'=>'test1@onebest.cn',
                'role_id'=>2,
                'city'=>'上海',
                'status'=>'使用中',
                'user_id'=>'1',
                'remember_token'=>'e04GMVQ40nsqoUaRGB3elSUTbDEFfPEwLlinUT1r',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            2 => array(
                'name'=>'测试账号2',
                'password'=>bcrypt('123456'),
                'email'=>'test2@onebest.cn',
                'role_id'=>2,
                'city'=>'上海',
                'status'=>'使用中',
                'user_id'=>'1',
                'remember_token'=>'e04GMVQ40nsqoUaRGB3elSUTbDEFfPEwLlinUT1r',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
        ));
    }
}
