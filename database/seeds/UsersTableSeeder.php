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
            'password'=>bcrypt('liuCIyin826'),
            'email'=>'liudanxia@onebest.cn',
            'role_id'=>1,
            'city'=>'上海',
            'status'=>'使用中',
            'user_id'=>'1',
            'remember_token'=>'Z0Q4krKMNsvfUWFNHeuoVfqeBlmuBLCO8bkfxXDrAvGAVMi6Yp...',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
