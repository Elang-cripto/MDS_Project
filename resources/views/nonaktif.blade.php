@extends('layout.main')

@section('title', $title)

@section('sidebar')
    @include('layout.side')
@endsection

@section('content')
    
  <!-- Page content -->
  <div class="container-fluid py-4">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Datasiswa Aktif</h3>
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
                                <a href="javascript:;" class="text-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Kartu">Cetak</a>|
                                <a href="javascript:;" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">Edit</a>|
                                <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus">Hapus</a>
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