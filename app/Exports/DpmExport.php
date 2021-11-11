<?php

namespace App\Exports;

use App\Models\voting2;
use Maatwebsite\Excel\Concerns\FromCollection;

class DpmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return voting2::all();
    }
}