<!DOCTYPE html>
<html lang="en">

<head>
  
    @include('include.style ')

</head>

<body>

    <!-- ======= Header ======= -->
 @include('include.header')

    <!-- ======= Sidebar ======= -->
    @include('include.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
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
                    <h5 class="card-title">Welcome Back Dwi Bina Fitriono</span></h5>
                    <p>Kami sangat senang melihat Anda kembali di sistem manajemen bimbingan konseling kami. Kehadiran
                        Anda sangat berarti bagi kami.</p>
                </div>
            </div><!-- End Reports -->


            <section class="section dashboard">
                <div class="row">

                    <div class="col-xxl-2 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Total Students</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1500</h6>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <div class="col-xxl-2 col-md-4">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Report Today</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-clipboard-data"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>10</h6>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-2 col-md-4">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Class</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>126</h6>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-14">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Reports Today</h5>
                                <div id="reportsChart">
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Achievement Id</th>
                                                <th scope="col">Student Id</th>
                                                <th scope="col">Achievement Name</th>
                                                <th scope="col">Achievement Date</th>
                                                <th scope="col">Achievement Level</th>
                                                <th scope="col">Achievement Category</th>
                                                <th scope="col">Achievement Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div><!-- End Reports -->


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Student Achievement</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Achievement Id</th>
                                            <th scope="col">Student Id</th>
                                            <th scope="col">Achievement Name</th>
                                            <th scope="col">Achievement Date</th>
                                            <th scope="col">Achievement Level</th>
                                            <th scope="col">Achievement Category</th>
                                            <th scope="col">Achievement Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                                </form>
                            </div><!-- End Search Bar -->
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