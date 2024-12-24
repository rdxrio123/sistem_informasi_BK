@extends('dashboard')
@section('kontent')
    <main id="main" class="main">
        <div class="container mt-4">
            <div class="pagetitle d-flex align-items-center">
                <!-- Tombol Kembali -->
                <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                    <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
                </a>
                <h1>Edit Point Cateories</h1>
            </div><!-- End Page Title -->

            <form action="{{ url('/updatekategori/' . $data->id) }}" method="post">

                @csrf


                <div class="mb-3">
                    Category of Violation:
                    <input type="text" id="category_of_violation" name="category_of_violation" class="form-control"
                        value="{{ $data->category_of_violation }}" required>
                </div>
                <div class="mb-3">
                    Min Score:
                    <input type="number" id="category_score_min" name="category_score_min" class="form-control"
                        value="{{ $data->category_score_min }}" required>
                </div>
                <div class="mb-3">
                    Max Score:
                    <input type="number" id="category_score_max" name="category_score_max" class="form-control"
                        value="{{ $data->category_score_max }}" required>
                </div>
                <div class="mb-3">
                    Follow Up:
                    <input type="text" id="follow_up" name="follow_up" class="form-control"
                        value="{{ $data->follow_up }}" required>
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

    </main>
