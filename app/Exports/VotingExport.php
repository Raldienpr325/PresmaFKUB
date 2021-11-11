<?php

namespace App\Exports;

use App\Models\voting;
use Maatwebsite\Excel\Concerns\FromCollection;

class VotingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return voting::all();
    }
}