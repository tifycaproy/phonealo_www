<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function getHome()
    {
        return view('home');
    }

    public function getUpdates()
    {
        $updates = Telegram::getUpdates();
        //dd($updates);
    }
    public function enviarmensaje(Request $request){
    //dd($text);    
    $text = $request->txtmensaje;
    Telegram::sendMessage([
     'chat_id' => env('TELEGRAM_CHANNEL_ID', '-186986214'),
     'parse_mode' => 'HTML',
     'text' => $text
    ]);

     return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'Message sent');


    }
   
}
