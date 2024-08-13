<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollment = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batch = Batch::all();
        $student = Student::all();
        return view('enrollments.create', [
            'batches' => $batch,
            'students' => $student,
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);

        return redirect('/enrollments')->with('info', "Enrollment added");
    }
   

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $enrollment = Enrollment::find($id);
        return view("enrollments.show")->with('enrollments', $enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $enrollment = Enrollment::find($id);
        $batch = Batch::all();
        $student = Student::all();
        return view('enrollments.edit', [
            'batches' => $batch,
            'students' => $student,
        ])->with('enrollments', $enrollment);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);

        return redirect('enrollments')->with('success', "Enrollment updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Enrollment::destroy($id);
        return redirect("enrollments")->with('info', 'Enrollment deleted');
    }
}
