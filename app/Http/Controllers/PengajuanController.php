<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = Pengajuan::all();
        return view('admin.pengajuan.index', compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nik' => 'required',
            'surat' => 'required',
            'deskripsi' => 'required'
        ],[
            'required' => 'Wajib diisi!!',
            'numeric' => 'Isian harus berupa angka!!'
        ]);

        DB::beginTransaction();
        try {
            Pengajuan::create([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'jenis_surat' => $request->surat,
                'deskripsi' => $request->deskripsi
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('pengajuan-surat')->with('message-warning', 'Gagal mengirim formulir!!');
        }

        return redirect('pengajuan-surat')->with('message-success', 'Pengajuan berhasil!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('admin.pengajuan.edit', compact('pengajuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nik' => 'required|numeric',
            'surat' => 'required',
            'deskripsi' => 'required'
        ],[
            'required' => 'Wajib diisi!!',
            'numeric' => 'Isian harus berupa angka!!'
        ]);
        $pengajuan = Pengajuan::find($id);
        DB::beginTransaction();
        try {
            $pengajuan->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'jenis_surat' => $request->surat,
                'deskripsi' => $request->deskripsi
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('pengajuan')->with('message-warning', 'Gagal memperbarui data!!');
        }
        return redirect()->route('pengajuan')->with('message-success', 'Perbaruan data berhasil!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::find($id);
        DB::beginTransaction();
        try {
            $pengajuan->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'jenis_surat' => $request->surat,
                'deskripsi' => $request->deskripsi
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('pengajuan')->with('message-warning', 'Gagal memperbarui data!!');
        }
        return redirect()->route('pengajuan')->with('message-success', 'Perbaruan data berhasil!!');
    }
}
