<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $visiMisi = DB::table('visiMisi')->first();
        return view('home.home', ['visiMisi' => $visiMisi]);
    }

    public function geografis()
    {
        $geografis = DB:table('geografis;')
    }
}
