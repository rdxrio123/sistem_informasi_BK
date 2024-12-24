@extends('dashboard')
@section('kontent')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container mt-4">
    <div class="pagetitle d-flex align-items-center">
        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
            <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
        </a>
        <h1>Edit Achievement Data</h1>
    </div><!-- End Page Title -->

    <form action="{{ url('/updateprestasi/' . $dataprestasi->id) }}" method="post">
        @csrf
      
        <div class="mb-3">
            <label for="student_id" class="form-label">Student Name:</label>
            <input type="text" id="student_id" name="student_id" class="form-control" 
                value="{{ $dataprestasi->student_id }}" required>
        </div>
        <div class="mb-3">
            <label for="student_id" class="form-label">Student Name:</label>
            <select class="form-control select2" style="width: 100%;" name="student_id" id="student_id">
                <option disabled value="">Choose Student</option> <!-- Opsi default -->
                @foreach ($datasiswa as $item)
                    <option value="{{ $item->id }}" {{ $dataprestasi->student_id == $item->id ? 'selected' : '' }}>
                        {{ $item->full_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="achievement_name" class="form-label">Achievement Name:</label>
            <input type="text" id="achievement_name" name="achievement_name" class="form-control" 
                value="{{ $dataprestasi->achievement_name }}" required>
        </div>

        <div class="mb-3">
            <label for="achievement_date" class="form-label">Achievement Date:</label>
            <input type="date" id="achievement_date" name="achievement_date" class="form-control" 
                value="{{ $dataprestasi->achievement_date }}" required>
        </div>

        <div class="mb-3">
            <label for="achievement_level" class="form-label">Achievement Level:</label>
            <input type="text" id="achievement_level" name="achievement_level" class="form-control" 
                value="{{ $dataprestasi->achievement_level }}" required>
        </div>

        <div class="mb-3">
            <label for="achievement_category" class="form-label">Achievement Category:</label>
            <input type="text" id="achievement_category" name="achievement_category" class="form-control" 
                value="{{ $dataprestasi->achievement_category }}" required>
        </div>

        <div class="mb-3">
            <label for="achievement_status" class="form-label">Achievement Status:</label>
            <input type="text" id="achievement_status" name="achievement_status" class="form-control" 
                value="{{ $dataprestasi->achievement_status }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
