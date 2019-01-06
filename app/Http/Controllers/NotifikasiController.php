<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogNotifikasi;

class NotifikasiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $log_notif = LogNotifikasi::all();
        return view('dashboard.notifikasi',compact('log_notif'));
    }

    public function destroy($id){
        LogNotifikasi::where('id',$id)->delete();
        return redirect()->back();
    }


}
