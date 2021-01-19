@extends('layouts.master')

@section('body')
<nav class="navbar navbar-ct-transparent" role="navigation-demo" id="demo-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://www.creative-tim.com">
           <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('assets') }}/paper_img/new_logo.png" alt="Desa Logo">
                </div>
                <div class="brand">
                    Desa
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-example-2">
      <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#" class="btn btn-secondary btn-fill">Components</a>
          </li>
          <li>
            <a href="#" class="btn btn-secondary btn-fill">Tutorial</a>
          </li>
          <li>
            <a href="/" target="_blank" class="btn btn-fill btn-default">Download</a>
          </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

@yield('content')

<!--    end modal -->
@endsection