@extends('dashboard')
@section('kontent')
    <div class="container mt-4">
        <div class="pagetitle d-flex align-items-center">
            <!-- Tombol Kembali -->
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
            </a>
            <h1>Edit Parents Data</h1>
        </div><!-- End Page Title -->

        <form action="{{ url('/updateparent/' . $dataparent->id) }}" method="post">

            @csrf

            <div class="mb-3">
                Parents Full Name:
                <input type="text" id="parent_full_name" name="parent_full_name" class="form-control"
                    value="{{ $dataparent->parent_full_name }}" required>
            </div>

            <div class="mb-3">
                Address:
                <input type="text" id="address" name="address" class="form-control" value="{{ $dataparent->address }}"
                    required>
            </div>

            <div class="mb-3">
                Job:
                <input type="text" id="job" name="job" class="form-control" value="{{ $dataparent->job }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control"
                    value="{{ $dataparent->phone_number }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
