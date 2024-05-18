@extends('layouts.master')
@section('title','Tambah Data Siswa')
@section('judul','Tambah Data siswa')
@section('nama','Hananan Academy')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/siswa/store/">

                @csrf
                <div class="form-group">
                    <label for="create">Create:</label>
                    <input type="text" class="form-control" id="create" name="nisn">
                </div>
                <div class="form-group">
                    <label for="update  ">Update</label>
                    <input type="text" class="form-control" id="update" name="nama">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/siswa/" class="btn btn-primary"> <i class="fa fa-plus"></i>Submit </a>
            </form>
        </div>
    </div>
</div>
@endsection
