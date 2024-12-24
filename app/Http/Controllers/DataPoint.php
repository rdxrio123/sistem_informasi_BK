<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PointData;
class DataPoint extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dataPoint()
    {
        $data = PointData::all();
        return view('Point.points', ['datapoint' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPoint()
    {
        return view('Point.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePoint(Request $request)
    {
        PointData::create([
            'violation' => $request->violation,
            'point_number' => $request->point_number,
        ]);
        return redirect('point');
    }

    /**
     * Display the specified resource.
     */
    public function showPoint($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPoint($id)
    {
        $data = PointData::find($id);
        return view('Point.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePoint(Request $request,$id)
    {
        $data = PointData::find($id);

        $data->violation = $request->violation;
        $data->point_number = $request->point_number;
        $data->save();

        return redirect()->route('point.tampil')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPoint($id)
    {
        $data = PointData::find($id);
        $data->delete();

        return redirect()->back();
    }
}
