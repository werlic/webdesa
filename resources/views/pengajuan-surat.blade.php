@extends('layouts.main')

@section('title', 'Pengajuan Surat')

@section('style')
<style>
    .bg-surat {
        background: url('{{ asset('image/Desa.jpg') }}') center;
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
            @if(session()->has('message-success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-dissmisable alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>
                                {!! session()->get('message-success') !!}
                            </strong>
                        </div>
                    </div>
                </div>
            @endif
            @if(session()->has('message-warning'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-dissmisable alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>
                                {!! session()->get('message-warning') !!}
                            </strong>
                        </div>
                    </div>
                </div>
            @endif
            <form action="{{ route('pengajuan.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
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
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
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
                            <input type="text" class="form-control" id="surat" name="surat" placeholder="Jenis Surat">
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