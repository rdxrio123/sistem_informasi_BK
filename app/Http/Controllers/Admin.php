<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassData;
use App\Models\Parents;

class Admin extends Controller
{
    public function index()
    {
        return view('template');
    }


    //Menampilkan Halaman Siswa
    public function Siswa()
    {
        $data = Student::with('class', 'parent')->get();
        return view('Student.siswa', ['datasiswa' => $data]);
    }

    public function tambahSiswa()
    {
        $datakelas = ClassData::all();
        $dataparent = Parents::all();
        return view('Student.tambah', compact('datakelas', 'dataparent'));
    }

    public function simpanSiswa(Request $request)
    {

        Student::create([
            'full_name' => $request->full_name,
            'nis' => $request->nis,
            'class_id' => $request->class_id,
            'parent_id' => $request->parent_id,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);


        return redirect('siswa')->with('success', 'Data siswa berhasil disimpan.');
    }

    public function hapusSiswa($id)
    {
        $datasiswa = Student::find($id);

        $datasiswa->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
    }
    public function editSiswa($id)
    {
        $datakelas = ClassData::all();
        $dataparent = Parents::all();
        $datasiswa = Student::find($id);

        return view('Student.edit', compact('datasiswa', 'datakelas', 'dataparent'));
    }

    public function updateSiswa(Request $request, $id)
    {
        $datasiswa = Student::find($id);


        $datasiswa->full_name = $request->full_name;
        $datasiswa->nis = $request->nis;
        $datasiswa->class_id = $request->class_id;
        $datasiswa->parent_id = $request->parent_id;
        $datasiswa->date_of_birth = $request->date_of_birth;
        $datasiswa->address = $request->address;
        $datasiswa->phone_number = $request->phone_number;


        $datasiswa->save();

        return redirect()->route('siswa.tampil')->with('success', 'Data siswa berhasil diperbarui.');
    }
}
