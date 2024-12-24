@extends('dashboard')
@section('kontent')
    <div class="container mt-4">
        <div class="pagetitle d-flex align-items-center">
            <!-- Tombol Kembali -->
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
            </a>
            <h1>Edit Case Study</h1>
        </div><!-- End Page Title -->

        <form action="{{ url('updatestudykasus/' . $data->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="point_number" class="form-label">Point:</label>
                <select class="form-control select2" style="width: 100%;" name="point_number" id="point_number">
                    <option disabled value="">Choose Point</option>
                    @foreach ($datapoint as $item)
                        <option value="{{ $item->id }}" {{ $data->point_number == $item->id ? 'selected' : '' }}>
                            {{ $item->point_number }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="student_id" class="form-label">Student Name:</label>
                <select class="form-control select2" style="width: 100%;" name="student_id" id="student_id">
                    <option disabled value="">Choose Student</option>
                    @foreach ($datasiswa as $item)
                        <option value="{{ $item->id }}" {{ $data->student_id == $item->id ? 'selected' : '' }}>
                            {{ $item->full_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
