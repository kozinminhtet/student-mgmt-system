<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function layout()
    {
        return view('layout');
    }

    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers', $teachers);
    }

    public function create()
    {
        return view('teachers.create');
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

        $student = new Teacher();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->save();

        return redirect('/teachers')->with('info', "Error");
    }

    public function show($id)
    {
        $student = Teacher::find($id);
        return view("teachers.show")->with('teachers', $student);
    }

    public function edit($id)
    {
        $student = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Teacher::find($id);
        $input = $request->all();
        $student->update($input);
        $student->save();

        return redirect('teachers')->with('success', "teacher updated");
    }

    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect("teachers")->with('info', 'Teacher deleted');
    }
    
}
