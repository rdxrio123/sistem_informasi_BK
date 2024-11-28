<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-4">Tambah Data Siswa</h3>
        <form action="simpan" method="post">
            @csrf

            <div class="mb-3">
                <label for="id" class="form-label">ID Siswa</label>
                <input type="number" id="id" name="id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="full_name" class="form-label">Nama Siswa</label>
                <input type="text" id="full_name" name="full_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" id="nis" name="nis" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="class_id" class="form-label">Kelas</label>
                <input type="text" id="class_id" name="class_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="parent_id" class="form-label">Orang Tua/Mewakili</label>
                <input type="text" id="parent_id" name="parent_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">No. Telepon</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6Dpr7fo6PBY6+1m1QqAIQyn2x3p6fM1g7KdGAh5GeY1QIIRE5Lr" crossorigin="anonymous">
    </script>
</body>

</html>
