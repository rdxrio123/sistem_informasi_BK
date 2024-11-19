<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Admin extends Controller
{
    public function index(){
        return view('template');
    }
   

//Menampilkan Halaman Siswa
   public function Siswa(){
    $datasiswa = Student::all();
    return view('Student.siswa',['datasiswa'=>$datasiswa]);
   }

   public function tambahSiswa(){
    return view('Student.tambah');
   }

   public function simpanSiswa(Request $request)
{
   
    Student::create([
        'id' => $request->id,
        'full_name' => $request->full_name,
        'nis' => $request->nis,
        'class_id' => $request->class_id,
        'parent_id' => $request->parent_id,
        'date_of_birth' => $request->date_of_birth,
        'address' => $request->address,
        'phone_number' => $request->phone_number,
    ]);

   
    return redirect('/siswa')->with('success', 'Data siswa berhasil disimpan.');
}

public function hapusSiswa($id){
    $datasiswa = Student::find($id);

    $datasiswa->delete();

    return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
}
public function editSiswa($id){
    $datasiswa = Student::find($id);

    return view('Student.edit', compact('datasiswa'));
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

    return redirect('Student.siswa')->with('success', 'Data siswa berhasil diperbarui.');
}


}
