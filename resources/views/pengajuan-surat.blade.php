@extends('layouts.main')

@section('title', 'Pengajuan Surat')

@section('style')
<style>
    .bg-surat {
        background:url('{{ asset('image/Desa.jpg') }}') center;
        -webkit-background-size: cover;
        -moz-background-size:  cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
@endsection

@section('content')
<div class="wrapper">
    <div class="section" style="min-height: 90vh;">
        <div class="container">
            <h2>Permohonan Surat</h2>

            <form action="#" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="surat">Jenis Surat</label>
                            <input type="text" class="form-control" id="surat" name="surat" placeholder="Jenis Surat">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi Pengajuan"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill btn-info">Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection