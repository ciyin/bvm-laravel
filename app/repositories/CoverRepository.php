<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/15
 * Time: 11:05
 */

namespace App\repositories;

use App\Cover;
use Image;

class CoverRepository{

//    保存封面
    public function storeCover($request){

//        将图片保存到文件夹中
        $tmp_name=$request->cover;
        $random_name=str_random(6).'.jpg';
        $path=public_path().'/cover/ '.$random_name;
        Image::make($tmp_name)->resize(95,138)->save($path);

//        将图片信息保存到数据表中
        $cover=new Cover();
        $cover->cover=$random_name;
        $cover->saved_at=$path;
        return $cover;
    }
}