<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function pengajuanSurat()
    {
        return view('pengajuan-surat');
    }

    public function contact()
    {
        return view('contact');
    }
}
