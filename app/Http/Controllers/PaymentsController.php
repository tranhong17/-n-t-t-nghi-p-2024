<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Http\Requests\StorePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Redirect;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = new Payments();
        $payments = $payment->index();

        return view('payments.index', [
            'payments' => $payments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentsRequest $request)
    {
        $payment = new Payments();
        $payment->name = $request->name;
        $payment->store();

        return Redirect::route('payments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payments $payments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payments $payments, $id)
    {
        $payments = Payments::findOrFail($id);
        return view('payments.edit', [
            'payments' => $payments
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentsRequest $request, Payments $payments)
    {
        $payments->id = $request->id;
        $payments->name = $request->name;
        $payments->updatePay();
        return Redirect::route('payments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payments $payments, $id)
    {
        $payments = Payments::findOrFail($id);
        $payments->delete();
        return Redirect::route('payments.index');
    }

    public function restore(Request $request){
        $payment = Payments::withTrashed()->findOrFail($request->id);
        $payment->restore();
        return Redirect::route('payments.index');
    }
}
