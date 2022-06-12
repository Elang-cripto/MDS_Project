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
            <h6>Management Pengguna</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach ($data as $baca)
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset('assets') }}/img/{{ $baca->foto }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $baca->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $baca->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-info">{{ $baca->role }}</span>
                      {{-- <p class="text-xs font-weight-bold mb-0">Manager</p> --}}
                      {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{ $baca->status }}</span>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                      <button class="btn btn-sm bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        aksi
                      </button>
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