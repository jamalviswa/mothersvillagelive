<?php

namespace App\Exports;

use App\Payment;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PaymentsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('payments.export', [
            'payments' => Payment::where('status', '<>', 'Trash')->where('addmore','=','0')
            ->orderBy('payment_id', 'desc')->get()
        ]);
    }
}
