@extends('layouts.master')
@section('title','Tambah Data Pendaftaran')
@section('judul','Tambah Data Pendaftaran')
@section('nama','SMK N 3 Banda Aceh')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/pendaftaran/store/">
                @csrf
                <div class="form-group">
                    <label for="nis">NISN:</label>
                    <input type="text" class="form-control" id="nis" name="nis">
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin:</label>
                    <input type="text" class="form-control" id="jk" name="jk">
                </div>
                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <input type="text" class="form-control" id="agama" name="agama">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat" name="tempat">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tgl" name="tgl">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="nm_ibu">Nama Ibu Kandung:</label>
                    <input type="text" class="form-control" id="nm_ibu" name="nm_ibu">
                </div>
                <div class="form-group">
                    <label for="nm_ayah">Nama Ayah Kandung:</label>
                    <input type="text" class="form-control" id="nm_ayah" name="nm_ayah">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
