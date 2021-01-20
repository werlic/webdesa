@extends('layouts.admin.main')
@section('title', 'Ganti Password')

@section('content')
<div class="content" style="min-height: 85vh;">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Ganti Password</h5>
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
              </div>
              <div class="card-body">
                <form action="{{ route('password.store') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12 px-2">
                        <div class="form-group">
                            <label>Password Lama</label>
                            <input type="password" id="password_old" name="password_old" class="form-control" placeholder="Password Lama">
                        </div>
                        @error('password_old')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 px-2">
                      <div class="form-group">
                        <label for="password">Password Baru</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password Baru">
                      </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 px-2">
                        <div class="form-group">
                            <label for="confirm">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Konfirmasi Password">
                        </div>
                        @error('confirm')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Ubah Password</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection