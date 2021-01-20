@extends('layouts.admin.main')

@section('title', 'Edit Pengajuan Surat')

@section('content')
<div class="content" style="min-height: 90vh;">
        <div class="container">
            <h2>Permohonan Surat</h2>

            <form action="{{ route('pengajuan.update', ['id' => $pengajuan->id]) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ $pengajuan->nama }}">
                        </div>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{ $pengajuan->nik }}">
                        </div>
                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="surat">Jenis Surat</label>
                            <input type="text" class="form-control" id="surat" name="surat" placeholder="Jenis Surat" value="{{ $pengajuan->jenis_surat }}">
                        </div>
                        @error('surat')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi Pengajuan">{{ $pengajuan->deskripsi }}</textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill btn-info"><i class="fa fa-save"></i> Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection