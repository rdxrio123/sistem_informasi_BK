@extends('dashboard')
@section('kontent')
    <div class="container mt-4">
        <div class="pagetitle d-flex align-items-center">
            <!-- Tombol Kembali -->
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
            </a>
            <h1>Add Case Study</h1>
        </div><!-- End Page Title -->

        <form action="simpanstudykasus" method="post">
            @csrf
            <div class="mb-3">
                <label for="point_number" class="form-label">Point:</label>
                <select class="form-control select2" style="width: 100%;" name="point_number" id="point_number">
                    <option disabled selected value="">Choose Point</option>
                    @foreach ($datapoint as $item)
                        <option value="{{ $item->id }}">{{ $item->point_number }}</option>
                    @endforeach
                </select>

            </div>


            <div class="mb-3">
                <label for="parent_id" class="form-label">Student Name:</label>
                <select class="form-control select2" style="width: 100%;" name="student_id" id="student_id">
                    <option disabled selected value="">Choose Student</option> <!-- Tambahkan selected -->
                    @foreach ($datasiswa as $item)
                        <option value="{{ $item->id }}">{{ $item->full_name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
