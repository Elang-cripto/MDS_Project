<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps bg-default" id="sidenav-main" data-color="info">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#" target="_blank">
      <img src="{{ asset('assets') }}/img/kemenag.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">MTsN Sejahtera</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Dashboard') ? 'active' :'' }}" href="/dashboard">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Jumlah') ? 'active' :'' }}" href="/jumlah">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-chart-pie-35 text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Jumlah Data</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Siswa Aktif') ? 'active' :'' }}" href="/aktif">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Siswa Aktif</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Siswa Validasi') ? 'active' :'' }}" href="/validasi">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Siswa Validasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Siswa Nonaktif') ? 'active' :'' }}" href="/nonaktif">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Siswa Non Aktif</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Data Rombel') ? 'active' :'' }}" href="/rombel">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Data Rombel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/billing.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Billing</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Admin pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === 'Management') ? 'active' :'' }}" href="/manage">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">User Management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/sign-in.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Download</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/sign-up.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Setting</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer mx-3 ">
    <div class="card card-plain shadow-none" id="sidenavCard">
      <img class="w-50 mx-auto" src="../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
      <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
          <h6 class="mb-0">MDM</h6>
          <p class="text-xs font-weight-bold mb-0">Management Data Madrasah</p>
        </div>
      </div>
    </div>
  </div>
</aside>

@if ($title=='Dashboard')
  <div class="main-content position-relative max-height-vh-100 h-100">
@else
  <main class="main-content position-relative border-radius-lg ">
@endif
