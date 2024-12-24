<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseStudy;
use App\Models\PointData;
use App\Models\Student;

class CaseReport extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexCaseReport()
    {
        $data = CaseStudy::with('datapoint','student')->get();
        return view('CaseStudy.studykasus', ['datastudykasus' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCaseReport()
    {
        $datapoint = PointData::all();
        $datasiswa = Student::all();
        return view('CaseStudy.tambah', compact('datapoint','datasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCaseReport(Request $request)
    {
        CaseStudy::create([
            'point_number' => $request->point_number,
            'student_id' => $request->student_id,
        ]);

        return redirect('studykasus');
    }

    /**
     * Display the specified resource.
     */
    public function showCaseReport(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCaseReport($id)
    {
        $data = CaseStudy::find($id);
        $datapoint = PointData::all();
        $datasiswa = Student::all();
        return view('CaseStudy.edit', compact('data','datasiswa','datapoint'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCaseReport(Request $request, $id)
    {
        $data = CaseStudy::find($id);
        
        $data->point_number = $request->point_number;
        $data->student_id = $request->student_id;

        $data->save();

        return redirect()->route('studykasus.tampil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCaseReport( $id)
    {
        $data = CaseStudy::find($id);
        $data->delete();
        return redirect()->back();
    }
}
