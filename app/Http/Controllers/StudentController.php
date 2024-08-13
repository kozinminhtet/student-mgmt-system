<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function layout()
    {
        return view('layout');
    }

    public function index():View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return back();
        }

        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->save();

        return redirect('/students')->with('infoo', "Error");
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view("students.show")->with('students', $student);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        $student->save();

        return redirect('students')->with('success', "student updated");
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect("students")->with('info', 'Student deleted');
    }
    
}
