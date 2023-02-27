<?php

namespace App\Exports;

use App\Cost;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CostsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('costs.export', [
            'costs' => Cost::where('status', '<>', 'Trash')->orderBy('cost_id', 'desc')->get()
        ]);
    }
}
