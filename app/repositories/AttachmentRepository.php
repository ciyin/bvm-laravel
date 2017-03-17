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

//       保存附件
    public function storeAttachment($request){
        $file=$request->file('attachment');
//       得到附件的名称
        $originalName=$file->getClientOriginalName();
//       得到附件的后缀名
        $ext=$file->getClientOriginalExtension();
//       得到附件的绝对存储路径
        $realPath=$file->getRealPath();
//       重新命名附件名称再保存，防止原附件名称有不可识别的字符，到时取不出来
        $random_name=str_random(5).'.'.$ext;
//       将附件保存到七牛
        $disk=\Storage::disk('qiniu');
        $res=$disk->put($random_name,file_get_contents($realPath));
//       如果成功保存，则返回附件的保存地址，并将附件信息存入库；
        if ($res){
            $url=$disk->getDriver()->downloadUrl($random_name);
            $attachment=new Attachment();
            $attachment->book_id=$request->book_id;
            $attachment->original_name=$originalName;
            $attachment->random_name=$random_name;
            $attachment->status='1';
            $attachment->note=$request->note;
            $attachment->saved_at=$url;
            $attachment->user_id=Auth::id();
            $versions=$request->related_version;
            if ($versions){
                $count=count($versions);
                for ($i=0;$i<$count;$i++){
                    $version=Version::find($versions[$i]);
                    $version->attachments()->save($attachment);
                }
            }else{
                $book=Book::find($request->book_id);
                $book->attachments()->save($attachment);
            }
        }
    }
}