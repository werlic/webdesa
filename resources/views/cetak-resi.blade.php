@extends('layouts.master')

@section('title', 'Cetak Pengajuan Surat')


@section('body')
<div class="container main">
    <div class="tim-title text-center" style="color: black!important;">
        <h3>Pengajuan Surat</h3>
    </div>
    <table width="100%" style="color: black!important;">
        <tr>
            <td>No. Pendaftaran</td>
            <td width="50px">:</td>
            <td>{{ $pengajuan->id }}</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td width="50px">:</td>
            <td>{{ $pengajuan->nama }}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td width="50px">:</td>
            <td>{{ $pengajuan->nik }}</td>
        </tr>
        <tr>
            <td>Jenis Surat</td>
            <td width="50px">:</td>
            <td>{{ $pengajuan->jenis_surat }}</td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td width="50px">:</td>
            <td>{{ $pengajuan->deskripsi }}</td>
        </tr>
    </table>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('body').attr('onload', window.print());
    })
</script>
@endsection