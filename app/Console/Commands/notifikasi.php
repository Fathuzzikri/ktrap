<?php

namespace App\Console\Commands;

use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Console\Command;
use App\LogNotifikasi;
use App\Serangan;

class notifikasi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:notif';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sistem Notifikasi Otomatis';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $serangan = Serangan::where('notifikasi',0 && 'success',1)
            ->first();

        $text = "<b>Serangan baru Telah Masuk!!!</b>\n"
            . "Dengan keterangan sebagai berikut\n"
            . "Username : "
            . $serangan->username
            . " || Password : "
            . $serangan->password
            . "\n\n"
            . "Serangan Masuk Pada\n"
            . $serangan->timestamp;

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001198254211.0'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        Serangan::where('notifikasi',0 && 'success',1)
            ->first()
            ->update(['notifikasi' => 1],['notif_time' => NOW()]);

        LogNotifikasi::insert(
                ['id_session'=>$serangan->session,'timestamp'=>NOW()]
            );
    }
}
