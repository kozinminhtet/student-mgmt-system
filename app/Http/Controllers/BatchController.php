<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Bus\Batch as BusBatch;

class BatchController extends Controller
{
    public function index()
    {
        $batch = Batch::all();
        return view('batches.index')->with('batches', $batch);
    
    }

    public function create()
    {
        $courses = Course::all();
        return view('batches.create', compact('courses'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Batch::create($input);

        return redirect('/batches')->with('info', "Batch added");
    }

    public function show($id)
    {
        $batch = Batch::find($id);
        return view("batches.show")->with('batches', $batch);
    }

    public function edit($id)
    {
        $batch = Batch::find($id);
        $courses = Course::all();
        // return view('batches.edit')->with('batches', $batch);
        return view('batches.edit', [
            "batches" => $batch,
            "courses" => $courses,
        ]);
    }

    public function update(Request $request, $id)
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        $batch->save();

        return redirect('batches')->with('success', "Batch updated");
    }

    public function destroy($id)
    {
        Batch::destroy($id);
        return redirect("batches")->with('info', 'Batch deleted');
    }
    
}
