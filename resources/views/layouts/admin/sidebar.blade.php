    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ asset('admin') }}/assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="{{ url('/') }}" class="simple-text logo-normal">
          Admin Desa
          <!-- <div class="logo-image-big">
            <img src="{{ asset('admin') }}/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li @if(url()->current() == route('dashboard')) class="active" @endif>
            <a href="{{ route('dashboard') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li @if(url()->current() == route('pengajuan')) class="active" @endif>
            <a href="{{ route('pengajuan') }}">
              <i class="nc-icon nc-paper"></i>
              <p>Pengajuan Surat</p>
            </a>
          </li>
          <li @if(url()->current() == route('profile')) class="active" @endif>
            <a href="{{ route('profile') }}">
              <i class="nc-icon nc-single-02"></i>
              <p>Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>