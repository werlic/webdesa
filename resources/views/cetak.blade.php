@extends('layouts.main')

@section('title', 'Pengajuan Surat')

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
            <div class="row">
                <div class="col-md-12">
                    Silahkan print bukti pengajuan atau unduh file berikut : <a href="{{ route('surat.cetak', ['id' => $no]) }}" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                    <p>
                        Jangan Lupa sertakan bukti pengajuan dan dokumen-dokumen pelengkap saat pergi ke balai desa.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection