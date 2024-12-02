@extends('dashboard') 

@section('content')
<div class="container mt-4">
    <div class="pagetitle d-flex align-items-center">
        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
            <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
        </a>
        <h1>Tambah Data Siswa</h1>
    </div><!-- End Page Title -->

    <form action="simpan" method="post">
        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">ID Siswa</label>
            <input type="number" id="id" name="id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="full_name" class="form-label">Nama Siswa</label>
            <input type="text" id="full_name" name="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" id="nis" name="nis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="class_id" class="form-label">Kelas</label>
            <input type="text" id="class_id" name="class_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="parent_id" class="form-label">Orang Tua/Mewakili</label>
            <input type="text" id="parent_id" name="parent_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">No. Telepon</label>
            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
