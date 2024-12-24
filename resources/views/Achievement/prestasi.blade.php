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
            <h1>Achievement</h1>
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
                    <h5 class="card-title">Achievement Table</span></h5>
                    <a href="{{ url('tambahprestasi') }}" class="btn btn-primary">Add</a>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Achievement ID</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Achievement Name</th>
                                <th scope="col">Achievement Date</th>
                                <th scope="col">Achievement Level</th>
                                <th scope="col">Achievement Category</th>
                                <th scope="col">Achievement Status</th>
                                <th scope="col" colspan="2">Action</th>




                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach ($prestasi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->student->full_name }}</td>
                                    <td>{{ $data->achievement_name }}</td>
                                    <td>{{ $data->achievement_date }}</td>
                                    <td>{{ $data->achievement_level }}</td>
                                    <td>{{ $data->achievement_category }}</td>
                                    <td>{{ $data->achievement_status }}</td>
                                    {{-- <td><a href="{{ url('editSiswa/' .$siswa->id) }}"><i class="bi bi-trash"></i></a> --}}
                                    <td><a href="{{ url('/editprestasi/' . $data->id) }}"><i
                                                class="bi bi-file-text"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/hapusprestasi/' . $data->id) }}"
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

    @include('include.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('include.script')


</body>

</html>
