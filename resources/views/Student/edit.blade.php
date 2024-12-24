@extends('dashboard')
@section('kontent')
    <main id="main" class="main">
        <div class="container mt-4">
            <div class="pagetitle d-flex align-items-center">
                <!-- Tombol Kembali -->
                <a href="{{ url()->previous() }}" class="btn btn-outline-primary me-3">
                    <i class="bi bi-arrow-left"></i> <!-- Icon panah kiri -->
                </a>
                <h1>Edit Student Data</h1>
            </div><!-- End Page Title -->

            <form action="{{ url('/update/' . $datasiswa->id) }}" method="post">

                @csrf

                <div class="mb-3">
                    Student Name:
                    <input type="text" id="full_name" name="full_name" class="form-control"
                        value="{{ $datasiswa->full_name }}" required>
                </div>

                <div class="mb-3">
                    NIS:
                    <input type="text" id="nis" name="nis" class="form-control" value="{{ $datasiswa->nis }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="class_id" class="form-label">Class:</label>
                    <select class="form-control select2" style="width: 100%;" name="class_id" id="class_id">
                        <option disabled value="">Choose Class</option> <!-- Opsi default -->
                        @foreach ($datakelas as $item)
                            <option value="{{ $item->id }}" {{ $datasiswa->class_id == $item->id ? 'selected' : '' }}>
                                {{ $item->school_class_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="parent_id" class="form-label">Parent:</label>
                    <select class="form-control select2" style="width: 100%;" name="parent_id" id="parent_id">
                        <option disabled value="">Choose Parent</option> <!-- Opsi default -->
                        @foreach ($dataparent as $item)
                            <option value="{{ $item->id }}" {{ $datasiswa->parent_id == $item->id ? 'selected' : '' }}>
                                {{ $item->parent_full_name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    Month Date Year:
                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"
                        value="{{ $datasiswa->date_of_birth }}" required>
                </div>

                <div class="mb-3">
                    Address:
                    <input type="text" id="address" name="address" class="form-control"
                        value="{{ $datasiswa->address }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                        value="{{ $datasiswa->phone_number }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('include.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('include.script')


    </body>

    </html>
