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
            <h1>Edit Class Data</h1>
        </div><!-- End Page Title -->

        <form action="{{ url('/updatekelas/' . $datakelas->id) }}" method="post">

            @csrf

            <div class="mb-3">
                Class Name:
                <input type="text" id="school_class_name" name="school_class_name" class="form-control"
                    value="{{ $datakelas->school_class_name }}" required>
            </div>

            <div class="mb-3">
                Major:
                <input type="text" id="school_class_major" name="school_class_major" class="form-control" value="{{ $datakelas->school_class_major }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    </body>

    </html>
@endsection
