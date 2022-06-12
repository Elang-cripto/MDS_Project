@extends('layout.main')

@section('title', $title)

@section('sidebar')
    @include('layout.side')
@endsection

@section('content')
    
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Datasiswa Validasi</h3>
                    <a href="/form_siswa" class="btn btn-success btn-sm ms-auto" data-toggle="tooltip" data-original-title="Tambah siswa baru">Tambah</a>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>JK</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach ($data as $baca)
                        <tbody>
                            <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $baca->nis }}</td>
                            <td>{{ $baca->nama }}</td>
                            <td>{{ $baca->jk }}</td>
                            <td>{{ $baca->tmp_lahir}}, {{ \Carbon\Carbon::parse($baca->tgl_lahir)->isoFormat('D MMMM Y') }}</td>
                            <td>{{ $baca->kelas_aktf }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                      aksi
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <li><a class="dropdown-item" href="#">Edit</a></li>
                                      <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
       
@endsection