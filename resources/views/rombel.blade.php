@extends('layout.main')

@section('title', $title)

@section('sidebar')
    @include('layout.side')
@endsection

@section('content')
    
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Rombongan Belajar</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Laki-laki</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Perempuan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Validasi</th>
                    <th></th>
                  </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach ($data as $baca)
                <tbody>
                  <tr>
                    <td>
                      {{ $no++ }}
                    </td>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                        </div>
                        <div class="my-auto">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Kelas {{ $baca->nm_kelas }}</h6>
                            <p class="text-xs text-secondary mb-0">Wali : {{ $baca->wl_kelas }}</p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">10</p>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">15</p>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">25</p>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">10%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 10%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button type="button" class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                      {{-- <button type="button" class="btn bg-gradient-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        aksi
                      </button> --}}
                      <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Edit</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Hapus</a></li>
                        {{-- <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li> --}}
                      </ul>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
       
@endsection