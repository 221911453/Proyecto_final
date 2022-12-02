<?php

namespace App\Exports;
use App\Models\Productos;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductosExport implements FromCollection, WithHeadings,ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $crit;
    function __construct($crit) {
        $this->crit = $crit;
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]]
        ];
    }
    public function headings(): array
    {
        return [
            'No.',
            'Nombre',
            'IMG',
            'Descripcion',
            'Precio',
            'Color',
            'Medida',
            'Material',
            'Fecha1',
            'Fecha2',
        ];
    }
    public function collection()
    {
        return Productos::Where('nombre', 'like', "%$this->crit%")->get();
    }
}
