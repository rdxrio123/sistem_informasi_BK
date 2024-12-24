@extends('dashboard') 
@section('kontent')
<div class="container mt-4">
    <div class="pagetitle d-flex align-items-center">
        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
            <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
        </a>
        <h1>Add Class Data</h1>
    </div><!-- End Page Title -->

    <form action="simpankelas" method="post">
        @csrf

        <div class="mb-3">
            <label for="school_class_name" class="form-label">Class Name</label>
            <input type="text" id="school_class_name" name="school_class_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="school_class_major" class="form-label">Class Major</label>
            <input type="text" id="school_class_major" name="school_class_major" class="form-control" required>
        </div>

       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
