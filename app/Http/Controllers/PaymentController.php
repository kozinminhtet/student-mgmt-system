<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();
        return view( "payments.index", ['payments' => $payment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $payment = Payment::all();
        $enrollment = Enrollment::all();
        return view('payments.create', [
            // 'payments' => $payment,
            'enrollments' => $enrollment
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Payment::create($input);

        return redirect('/payments')->with('info', "Payment added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::find($id);
        return view("payments.show")->with('payments', $payment);
    }

    public function edit(string $id)
    {
        $payment = Payment::find($id);
        $enrollment = Enrollment::all();
        return view('payments.edit', [
            "payments" => $payment,
            "enrollments" => $enrollment,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        $payment->save();

        return redirect('payments')->with('success', "Payment updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect("payments")->with('info', 'Payment deleted');
    }
}
