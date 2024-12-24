@extends('dashboard')
@section('kontent')
    <div class="container mt-4">
        <div class="pagetitle d-flex align-items-center">
            <!-- Tombol Kembali -->
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
            </a>
            <h1>Add Achievement</h1>
        </div><!-- End Page Title -->

        <form action="simpanprestasi" method="post">
            @csrf

            <div class="mb-3">
                <label for="student_id" class="form-label">Studet Name:</label>
                <select class="form-control select2" style="width: 100%;" name="student_id" id="student_id">
                    <option disabled selected value="">Choose Student</option> <!-- Tambahkan selected -->
                    @foreach ($datasiswa as $item)
                        <option value="{{ $item->id }}">{{ $item->full_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="achievement_name" class="form-label">Achievement Name:</label>
                <input type="text" id="achievement_name" name="achievement_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="achievement_date" class="form-label">Achievement Date:</label>
                <input type="date" id="achievement_date" name="achievement_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="achievement_level" class="form-label">Achievement Level:</label>
                <input type="text" id="achievement_level" name="achievement_level" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="achievement_category" class="form-label">Achievement Category:</label>
                <input type="text" id="achievement_category" name="achievement_category" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="achievement_status" class="form-label">Achievement Status:</label>
                <input type="text" id="achievement_status" name="achievement_status" class="form-control" required>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
