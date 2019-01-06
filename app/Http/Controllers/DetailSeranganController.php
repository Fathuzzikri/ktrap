<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serangan;
use App\DetailSerangan;

class DetailSeranganController extends Controller
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
        $serangan = Serangan::all();
        return view('dashboard.detail_serangan', compact('serangan'));
    }

    public function lihat_aktivitas($session){
        $aktivitas = DetailSerangan::where('session',$session)->get();

        return view('dashboard.aktivitas', compact('aktivitas'));
    }
}
