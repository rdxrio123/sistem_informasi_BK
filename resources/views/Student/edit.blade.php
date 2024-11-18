<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h3>Edit Data Siswa</h3>
        <form action="{{ route('siswa.update', . $datasiswa->id) }}" method="post">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label for="full_name" class="form-label">Nama Siswa</label>
                <input type="text" id="full_name" name="full_name" class="form-control" value="{{ $datasiswa->full_name }}" required>
            </div>

            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" id="nis" name="nis" class="form-control" value="{{ $datasiswa->nis }}" required>
            </div>

            <div class="mb-3">
                <label for="class_id" class="form-label">Kelas</label>
                <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $datasiswa->class_id }}" required>
            </div>

            <div class="mb-3">
                <label for="parent_id" class="form-label">Orang Tua/Mewakili</label>
                <input type="text" id="parent_id" name="parent_id" class="form-control" value="{{ $datasiswa->parent_id }}" required>
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ $datasiswa->date_of_birth }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ $datasiswa->address }}" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">No. Telepon</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ $datasiswa->phone_number }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
