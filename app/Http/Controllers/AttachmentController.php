<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\StoreAttachment;
use App\Log;
use App\repositories\AttachmentRepository;
use App\repositories\LogRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttachmentController extends Controller
{
    protected $log;
    public function __construct(LogRepository $log)
    {
        $this->log=$log;
    }

    public function store(StoreAttachment $request,AttachmentRepository $attachment)
    {
        $attachment->storeAttachment($request);
        $this->log->storeLog('新增附件：'.$request->file('attachment')->getClientOriginalName());
        return redirect()->route('book.show',$request->book_id);
    }

    public function update(Request $request,AttachmentRepository $attachment){
        $attachment->updateAttachment($request);
        $this->log->storeLog($request->status.':'.$request->attach);
        return redirect()->route('book.show',$request->book_id);
    }
}
