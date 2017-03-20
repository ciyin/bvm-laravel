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
    protected $attachment;

//    实例化attachment对象
    public function newAttachment($request,$original_name,$random_name,$url){
        $attachment=new Attachment();
        $attachment->original_name=$original_name;
        $attachment->random_name=$random_name;
        $attachment->status='1';
        $attachment->note=$request->note;
        $attachment->saved_at=$url;
        $attachment->user_id=Auth::id();
        return $attachment;
    }

//       保存附件
    public function storeAttachment($request){
        $file=$request->file('attachment');
//       得到附件的名称
        $original_name=$file->getClientOriginalName();
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
            $versions=$request->related_version;
            if ($versions){
                $count=count($versions);
                for ($i=0;$i<$count;$i++){
                    $this->attachment=$this->newAttachment($request,$original_name,$random_name,$url);
                    $version=Version::find($versions[$i]);
                    $version->attachments()->save($this->attachment);
                }
            }else{
                $this->attachment=$this->newAttachment($request,$original_name,$random_name,$url);
                $book=Book::find($request->book_id);
                $book->attachments()->save($this->attachment);
            }
        }
    }
}