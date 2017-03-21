<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/15
 * Time: 11:05
 */

namespace App\repositories;

use App\Cover;
use Illuminate\Support\Facades\Auth;
use Image;

class CoverRepository{

//    保存封面
    public function storeCover($request){
        $file=$request->file('cover');
        $random_name=str_random(5).'.'.$file->getClientOriginalExtension();
        $disk=\Storage::disk('qiniu');
        $res=$disk->put($random_name,file_get_contents($file->getRealPath()));
        if ($res){
            $cover=new Cover();
            $cover->original_name=$file->getClientOriginalName();
            $cover->random_name=$random_name;
            $cover->saved_at=$disk->getDriver()->downloadUrl($random_name);
            $cover->user_id=Auth::id();
            return $cover;
        }
    }
}