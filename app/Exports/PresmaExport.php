<?php

namespace App\Exports;

use App\Models\Presma;
use Maatwebsite\Excel\Concerns\FromCollection;

class PresmaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Presma::all();
    }
}
