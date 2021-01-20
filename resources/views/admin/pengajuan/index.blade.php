@extends('layouts.admin.main')

@section('title', 'Pengajuan Surat')

@section('content')
<div class="content" style="min-height: 85vh">
    
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Pengajuan Surat</h3>
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
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                        <th>No. </th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Surat</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($pengajuan as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->jenis_surat }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>
                                <a href="{{ route('pengajuan.edit', ['id' => $p->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('pengajuan.delete', ['id' => $p->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection