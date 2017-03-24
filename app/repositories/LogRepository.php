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

    public function storeLog($operation){
        $log=new Log();
        $log->operation=$operation;
        Auth::user()->logs()->save($log);
    }
}