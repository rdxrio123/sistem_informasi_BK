@extends('dashboard')
@section('kontent')
    <div class="container mt-4">
        <div class="pagetitle d-flex align-items-center">
            <!-- Tombol Kembali -->
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
            </a>
            <h1>Add Student Data</h1>
        </div><!-- End Page Title -->

        <form action="simpan" method="post">
            @csrf

            <div class="mb-3">
                <label for="full_name" class="form-label">Student Name:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nis" class="form-label">NIS:</label>
                <input type="text" id="nis" name="nis" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="class_id" class="form-label">Class:</label>
                <select class="form-control select2" style="width: 100%;" name="class_id" id="class_id">
                    <option disabled selected value="">Choose Class</option> <!-- Tambahkan selected -->
                    @foreach ($datakelas as $item)
                        <option value="{{ $item->id }}">{{ $item->school_class_name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="parent_id" class="form-label">Parent:</label>
                <select class="form-control select2" style="width: 100%;" name="parent_id" id="parent_id">
                    <option disabled selected value="">Choose Parent</option> <!-- Tambahkan selected -->
                    @foreach ($dataparent as $item)
                        <option value="{{ $item->id }}">{{ $item->parent_full_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Month Date Year:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
