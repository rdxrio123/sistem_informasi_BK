<!DOCTYPE html>
<html lang="en">

<head>

    @include('include.style')

</head>

<body>

    <!-- ======= Header ======= -->
    @include('include.header')
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('include.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Student Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student Table</span></h5>
                    <a href="{{ url('tambah') }}" class="btn btn-primary">Add</a>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Class</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Month Date Year</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col" colspan="2">Action</th>




                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach ($datasiswa as $siswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswa->id }}</td>
                                    <td>{{ $siswa->full_name }}</td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->class->school_class_name }}</td>
                                    <td>{{ $siswa->parent->parent_full_name }}</td>
                                    <td>{{ $siswa->date_of_birth }}</td>
                                    <td>{{ $siswa->address }}</td>
                                    <td>{{ $siswa->phone_number }}</td>
                                    {{-- <td><a href="{{ url('editSiswa/' .$siswa->id) }}"><i class="bi bi-trash"></i></a> --}}
                                    <td><a href="{{ url('/edit/' . $siswa->id) }}"><i class="bi bi-file-text"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ url('hapus/' . $siswa->id) }}"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash" style="color:red;"></i>
                                        </a>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- End Reports -->


        </div>

        </div>

        </div>
        </div><!-- End Reports -->
        </div>
        </div><!-- End Left side columns -->
        </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('include.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('include.script')


</body>

</html>
