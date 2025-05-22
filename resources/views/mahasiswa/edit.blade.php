@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<form action="{{ route('mahasiswa.update', $mahasiswa['nim']) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-2">
        <label>NIM</label>
        <input type="text" name="nim" value="{{ $mahasiswa['nim'] }}" class="form-control" readonly>
    </div>
    <div class="mb-2">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $mahasiswa['nama'] }}" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Email</label>
        <input type="email" name="email" value="{{ $mahasiswa['email'] }}" class="form-control">
    </div>
    <div class="mb-2">
  <label>Prodi</label>
    <input type="text" name="prodi" value="{{ $mahasiswa['prodi'] }}" class="form-control" required>
</div>
<button class="btn btn-primary">Update</button>
</form> @endsection 