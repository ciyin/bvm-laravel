<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/13
 * Time: 15:03
 */
namespace App\repositories;

use App\Attachment;
use App\Book;
use App\Version;
use Illuminate\Support\Facades\Auth;

class AttachmentRepository{

//    实例化attachment对象
    public function newAttachment($request,$random_name,$saved_at){
        $attachment=new Attachment();
        $attachment->original_name=$request->file('attachment')->getClientOriginalName();
        $attachment->random_name=$random_name;
        $attachment->status='使用中';
        $attachment->note=$request->note;
        $attachment->saved_at=$saved_at;
        $attachment->user_id=Auth::id();
        return $attachment;
    }

//      保存附件
    public function storeAttachment($request){
//        将附件保存到七牛
        $file=$request->file('attachment');
        $random_name=str_random(5).'.'.$file->getClientOriginalExtension();
        $disk=\Storage::disk('qiniu');
        $res=$disk->put($random_name,file_get_contents($file->getRealPath()));
//        若保存成功，则取得保存地址，并存到数据表中。
        if ($res){
            $saved_at=$disk->getDriver()->downloadUrl($random_name);
//            判断该附件是否适用全部版本
            if ($request->is_general) {
                Book::find($request->book_id)->attachments()->save($this->newAttachment($request, $random_name, $saved_at));
            }else{
                $versions=$request->related_version;
                if ($versions){
                    $count=count($versions);
                    for ($i=0;$i<$count;$i++){
                        Version::find($versions[$i])->attachments()->save($this->newAttachment($request,$random_name,$saved_at));
                    }
                }
            }
        }
    }



}
