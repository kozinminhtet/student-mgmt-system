<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    
    }

    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required',
            'syllabus' => 'required',
            'duration' => 'required',
        ]);

        if($validator->fails()){
            return back();
        }

        $course = new Course();
        $course->name = $request->name;
        $course->syllabus = $request->syllabus;
        $course->duration = $request->duration;
        $course->save();

        return redirect('/courses')->with('info', "Error");
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view("courses.show")->with('courses', $course);
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit')->with('courses', $course);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $input = $request->all();
        $course->update($input);
        $course->save();

        return redirect('courses')->with('success', "Course updated");
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect("courses")->with('info', 'Course deleted');
    }
    
}
