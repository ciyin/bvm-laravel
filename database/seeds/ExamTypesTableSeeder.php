<?php

use Illuminate\Database\Seeder;

class ExamTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exam_types')->insert(array(
            0 => array(
                'exam_type'=>'TOEFL',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            1 => array(
                'exam_type'=>'SAT',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            2 => array(
                'exam_type'=>'ACT',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            3 => array(
                'exam_type'=>'SSAT',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            4 => array(
                'exam_type'=>'IELTS',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            5 => array(
                'exam_type'=>'AP',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            6 => array(
                'exam_type'=>'TOEFL Junior',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
            7 => array(
                'exam_type'=>'SAT II',
                'user_id'=>'1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ),
        ));
    }
}
