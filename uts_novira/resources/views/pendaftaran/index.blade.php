@extends('layouts.master')
@section('title', 'Data Pendaftaran')
@section('judul', 'Data Pendaftaran')
@section('nama', 'SMK N 3 Banda Aceh')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header">
        <a href="{{ url('/pendaftaran/form') }}" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah data </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nisn</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Nama Ibu Kandung</th>
                            <th>Nama Ayah Kandung</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pen as $item)
                            <tr>
                                <td>{{ $nomor++ }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->tempat }}</td>
                                <td>{{ $item->tgl }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->nm_ibu }}</td>
                                <td>{{ $item->nm_ayah }}</td>
                                <td>
                                    <a href="{{ url('/pendaftaran/edit/' . $item->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pen"></i></a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{ $item->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin ingin menghapus data siswa <b>{{ $item->nama }}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <form action="{{ url('/pendaftaran/' . $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
