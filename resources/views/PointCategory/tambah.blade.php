@extends('dashboard') 
@section('kontent')
<div class="container mt-4">
    <div class="pagetitle d-flex align-items-center">
        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
            <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
        </a>
        <h1>Add Point Categories</h1>
    </div><!-- End Page Title -->

    <form action="simpankategori" method="post">
        @csrf

        <div class="mb-3">
            <label for="category_of_violation" class="form-label">Category of Violation:</label>
            <input type="text" id="category_of_violation" name="category_of_violation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="category_score_min" class="form-label">Min Score:</label>
            <input type="number" id="category_score_min" name="category_score_min" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="category_score_max" class="form-label">Max Score:</label>
            <input type="number" id="category_score_max" name="category_score_max" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="follow_up" class="form-label">Follow Up:</label>
            <input type="text" id="follow_up" name="follow_up" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
