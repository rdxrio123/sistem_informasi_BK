<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parents;

class ParentStudent extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function parentData()
    {
        $data = Parents::all();
        return view('Parents.parent', ['parentdata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addParent()
    {
        return view('Parents.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeParent(Request $request)
    {
        Parents::create([
            'parent_full_name' => $request->parent_full_name,
            'address' => $request->address,
            'job' => $request->job,
            'phone_number' => $request->phone_number,
        ]);


        return redirect('ortu')->with('success', 'Data siswa berhasil disimpan.');
    }
    public function editParent($id)
    {
        $dataparent = Parents::find($id);

        return view('Parents.edit', compact('dataparent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateParent(Request $request, $id)
    {
        $dataparent = Parents::find($id);


        $dataparent->parent_full_name = $request->parent_full_name;
        $dataparent->address = $request->address;
        $dataparent->job = $request->job;
        $dataparent->phone_number = $request->phone_number;


        $dataparent->save();

        return redirect()->route('ortu.tampil')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyParent($id)
    {
        $data = Parents::find($id);

        $data->delete();
        return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
    }
}
