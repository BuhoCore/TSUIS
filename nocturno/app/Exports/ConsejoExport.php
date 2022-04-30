<?php

namespace App\Exports;

use App\Models\Consejo;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConsejoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Consejo::all();
    }
}
