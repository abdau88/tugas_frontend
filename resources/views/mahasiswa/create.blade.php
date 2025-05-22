@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <div class="mb-2">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-2">
        <label>Prodi</label>
        <input type="text" name="prodi" class="form-control" required>
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection
