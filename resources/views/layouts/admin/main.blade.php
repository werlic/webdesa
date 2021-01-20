@extends('layouts.admin.master')

@section('main')
    @include('layouts.admin.sidebar')
    <div class="main-panel">
    @include('layouts.admin.navbar')
      @yield('content')
      @include('layouts.admin.footer')
    </div>
@endsection