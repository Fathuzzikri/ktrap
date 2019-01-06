<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use App\LogNotifikasi;

class TestNotifikasi extends Controller
{
    public function test()
    {
        $text = "<b>Test Notifikasi Berhasil</b>\n"
            . "\n"
            . "Pesan diterima Pada : "
            . NOW();
 
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001198254211.0'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
        
        LogNotifikasi::insert(['id_session'=>'TESTING','timestamp'=>NOW()]);

        return redirect()->back();      
    }

}