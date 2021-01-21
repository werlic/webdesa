<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

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

    public function cetak($id)
    {
        $no = $id;
        return view('cetak', compact('no'));
    }

    public function cetakPengajuan($id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('cetak-resi', ['pengajuan' => $pengajuan]);
    }

    public function contact()
    {
        return view('contact');
    }
}
