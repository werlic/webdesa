@extends('layouts.admin.main')
@section('title', 'Profile')

@section('content')
<div class="content" style="min-height: 85vh;">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
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
                <form action="{{ route('profile.update') }}" method="POST">
                  @csrf
                  <div class="row px-1">
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama" value="{{ $user->name }}">
                      </div>
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                      </div>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 px-1">
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" id="jk" name="jk" value="L" @if ($user->jk == 'L') checked @endif>
                                Laki-laki
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" id="jk" name="jk" value="P" @if ($user->jk == 'P') checked @endif>
                                Perempuan
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 px-1">
                        <a href="{{ route('changepassword') }}" class="btn btn-fill btn-secondary">Change Password</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection