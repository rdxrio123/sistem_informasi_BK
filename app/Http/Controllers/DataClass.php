<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassData;

class DataClass extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function classData()
    {
       $data = ClassData::all();
       return view('Class.class', ['datakelas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addClass()
    {
        return view('Class.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeClass(Request $request)
    {
        ClassData::create([
            'school_class_name' => $request->school_class_name,
            'school_class_major' => $request->school_class_major,
        ]);


        return redirect('kelas')->with('success', 'Data siswa berhasil disimpan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function editClass($id)
    {
        $datakelas = ClassData::find($id);

        return view('Class.edit', compact('datakelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateClass(Request $request, $id)
    {
        $datakelas = ClassData::find($id);


        $datakelas->school_class_name = $request->school_class_name;
        $datakelas->school_class_major = $request->school_class_major;
       


        $datakelas->save();

        return redirect()->route('kelas.tampil')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyClass($id)
    {
        $data = ClassData::find($id);

        $data->delete();
        return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');

    }
}
