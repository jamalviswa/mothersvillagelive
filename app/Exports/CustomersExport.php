<?php

namespace App\Exports;

use App\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CustomersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('customers.export', [
            'customers' => Customer::where('status', '<>', 'Trash')
            ->orderBy('customer_id', 'asc')->get()
        ]);
    }
}
