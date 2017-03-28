<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 2017/3/24
 * Time: 14:53
 */
namespace App\repositories;

use App\Log;
use Illuminate\Support\Facades\Auth;

class LogRepository{
    public function logList(){
        $list=Log::with('user')->Paginate(20);
        return $list;
    }

    public function storeLog($operation){
        $log=new Log();
        $log->operation=$operation;
        Auth::user()->logs()->save($log);
    }

    public function searchLog($log){
        $list=Log::with('user')->where('logs.operation','like','%'.$log.'%')->Paginate(20);
        return $list;
    }
}