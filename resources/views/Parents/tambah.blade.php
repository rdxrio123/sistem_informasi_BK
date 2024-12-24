@extends('dashboard') 
@section('kontent')
<div class="container mt-4">
    <div class="pagetitle d-flex align-items-center">
        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
            <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
        </a>
        <h1>Add Parents Data</h1>
    </div><!-- End Page Title -->

    <form action="simpanparent" method="post">
        @csrf

        <div class="mb-3">
            <label for="parent_full_name" class="form-label">Parent Name:</label>
            <input type="text" id="parent_full_name" name="parent_full_name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="job" class="form-label">Job:</label>
            <input type="text" id="job" name="job" class="form-control" required>
        </div>


        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
