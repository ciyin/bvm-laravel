<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(Array(
                0 => array(
                    'exam_type_id'=>'1', //TOEFL
                    'subject'=>'阅读',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                1 => array(
                    'exam_type_id'=>'1',
                    'subject'=>'听力',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                2 => array(
                    'exam_type_id'=>'1',
                    'subject'=>'口语',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                3 => array(
                    'exam_type_id'=>'1',
                    'subject'=>'写作',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                4 => array(
                    'exam_type_id'=>'2', //SAT
                    'subject'=>'阅读',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                5 => array(
                    'exam_type_id'=>'2',
                    'subject'=>'数学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                6 => array(
                    'exam_type_id'=>'2',
                    'subject'=>'写作',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                7 => array(
                    'exam_type_id'=>'2',
                    'subject'=>'语法',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                8 => array(
                    'exam_type_id'=>'3', //ACT
                    'subject'=>'阅读',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                9 => array(
                    'exam_type_id'=>'3',
                    'subject'=>'数学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                10 => array(
                    'exam_type_id'=>'3',
                    'subject'=>'写作',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                11 => array(
                    'exam_type_id'=>'3',
                    'subject'=>'语法',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                12 => array(
                    'exam_type_id'=>'3',
                    'subject'=>'科学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                13 => array(
                    'exam_type_id'=>'4', //SSAT
                    'subject'=>'词汇',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                14 => array(
                    'exam_type_id'=>'4',
                    'subject'=>'数学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                15 => array(
                    'exam_type_id'=>'4',
                    'subject'=>'阅读',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                16 => array(
                    'exam_type_id'=>'4',
                    'subject'=>'写作',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                17 => array(
                    'exam_type_id'=>'5', //IELTS
                    'subject'=>'阅读',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                18 => array(
                    'exam_type_id'=>'5',
                    'subject'=>'听力',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                19 => array(
                    'exam_type_id'=>'5',
                    'subject'=>'口语',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                20 => array(
                    'exam_type_id'=>'5',
                    'subject'=>'写作',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                21 => array(
                    'exam_type_id'=>'6', //AP
                    'subject'=>'微积分',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                22 => array(
                    'exam_type_id'=>'6',
                    'subject'=>'物理',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                23 => array(
                    'exam_type_id'=>'6',
                    'subject'=>'化学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                24 => array(
                    'exam_type_id'=>'6',
                    'subject'=>'宏观经济',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                25 => array(
                    'exam_type_id'=>'6',
                    'subject'=>'美国史',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                26 => array(
                    'exam_type_id'=>'6',
                    'subject'=>'世界史',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                27 => array(
                    'exam_type_id'=>'6',
                    'subject'=>'统计学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                28 => array(
                    'exam_type_id'=>'7', //TOEFL Junior
                    'subject'=>'阅读',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                29 => array(
                    'exam_type_id'=>'7',
                    'subject'=>'听力',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                30 => array(
                    'exam_type_id'=>'7',
                    'subject'=>'语言形式和含义',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                31 => array(
                    'exam_type_id'=>'8', //SAT II
                    'subject'=>'数学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                32 => array(
                    'exam_type_id'=>'8',
                    'subject'=>'物理',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                33 => array(
                    'exam_type_id'=>'8',
                    'subject'=>'化学',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                34 => array(
                    'exam_type_id'=>'8',
                    'subject'=>'生物',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                35 => array(
                    'exam_type_id'=>'8',
                    'subject'=>'美国史',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
                36 => array(
                    'exam_type_id'=>'8',
                    'subject'=>'世界史',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ),
            )
        );
    }
}
