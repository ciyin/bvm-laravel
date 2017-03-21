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
        $file=$request->file('attachment');
        $attachment=new Attachment();
        $attachment->original_name=$file->getClientOriginalName();
        $attachment->random_name=$random_name;
        $attachment->status='1';
        $attachment->note=$request->note;
        $attachment->saved_at=$saved_at;
        $attachment->user_id=Auth::id();
        return $attachment;
    }

//      保存附件：先将附件保存到七牛，再取得附件保存路径，最后保存到数据库。
    public function storeAttachment($request){
        $file=$request->file('attachment');
        $random_name=str_random(5).'.'.$file->getClientOriginalExtension();
        $disk=\Storage::disk('qiniu');
        $res=$disk->put($random_name,file_get_contents($file->getRealPath()));
        if ($res){
            $saved_at=$disk->getDriver()->downloadUrl($random_name);
            $versions=$request->related_version;
            if ($versions){
                $count=count($versions);
                for ($i=0;$i<$count;$i++){
                    Version::find($versions[$i])->attachments()->save($this->newAttachment($request,$random_name,$saved_at));
                }
            }else{
                Book::find($request->book_id)->attachments()->save($this->newAttachment($request,$random_name,$saved_at));
            }
        }
    }
}
