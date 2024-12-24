
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
            <h1>Class Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="col-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Class Table</span></h5>
                    <a href="{{ url('tambahkelas') }}" class="btn btn-primary">ADD</a>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Class</th>
                                <th scope="col">School Class Name</th>
                                <th scope="col">School Class Major</th>
                                <th scope="col" colspan="2">Action</th>




                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach ($datakelas as $kelas)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $kelas->id }}</td>
                                    <td>{{ $kelas->school_class_name }}</td>
                                    <td>{{ $kelas->school_class_major }}</td>
                                    {{-- <td><a href="{{ url('editSiswa/' .$siswa->id) }}"><i class="bi bi-trash"></i></a> --}}
                                        <td><a href="{{ url('/editkelas/'. $kelas->id) }}"><i class="bi bi-file-text"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ url('hapuskelas/'. $kelas->id) }}"
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
