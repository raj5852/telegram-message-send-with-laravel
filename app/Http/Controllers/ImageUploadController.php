<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;



class ImageUploadController extends Controller
{
    //
    function post(Request $request)
    {
        


        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'parse_mode' => 'HTML',
            'text' => $request->title,


        ]);
        
        return "Done";
    }
   
}
