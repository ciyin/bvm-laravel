<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/2
 * Time: 15:53
 */
namespace App\repositories;

use App\Version;
use Illuminate\Support\Facades\Auth;

class VersionRepository{

//    新增版本记录
    public function storeVersion($request){
        $version=new Version();
        $version->version=$request->version;
        $version->update_reason=$request->update_reason;
        $version->user_id=Auth::id();
        return $version;
    }
}