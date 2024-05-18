@extends('layouts.master')

@section('title', 'Edit Pendafataran')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Pendaftaran</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/pendaftaran/{{$pen->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nisn</label>
                    <input type="text" readonly value="{{$pen->nis}}" class="form-control" name="nis">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" readonly value="{{$pen->nama}}" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <input type="text" readonly value="{{$pen->jk}}" class="form-control" name="jk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <input type="text" readonly value="{{$pen->agama}}" class="form-control" name="agama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Temapat Lahir</label>
                    <input type="text" readonly value="{{$pen->tempat}}" class="form-control" name="tempat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="text" readonly value="{{$pen->tgl}}" class="form-control" name="tgl">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" readonly value="{{$pen->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ibu Kandung</label>
                    <input type="text" readonly value="{{$pen->nm_ibu}}" class="form-control" name="nm_ibu">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ayah Kandung</label>
                    <input type="text" readonly value="{{$pen->nm_ayah}}" class="form-control" name="nm_ayah">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
