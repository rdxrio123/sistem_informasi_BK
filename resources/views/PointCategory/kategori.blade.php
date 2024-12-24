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
            <h1>Points Categories</h1>
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
                    <h5 class="card-title">Points Categories Table</span></h5>
                    <a href="{{ url('tambahkategori') }}" class="btn btn-primary">Add</a>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">PointCategory ID</th>
                                <th scope="col">Category of Violation</th>
                                <th scope="col">Min Score</th>
                                <th scope="col">Max Score</th>
                                <th scope="col">Follow Up</th>
                                <th scope="col" colspan="2">Action</th>




                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach ($datakategori as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->category_of_violation }}</td>
                                    <td>{{$data->category_score_min}}</td>
                                    <td>{{$data->category_score_max}}</td> 
                                    <td>{{$data->follow_up}}</td>
                                    {{-- <td><a href="{{ url('editSiswa/' .$siswa->id) }}"><i class="bi bi-trash"></i></a> --}}
                                    <td><a href="{{ url('/editkategori/' . $data->id) }}"><i class="bi bi-file-text"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/hapuskategori/' . $data->id) }}"
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
