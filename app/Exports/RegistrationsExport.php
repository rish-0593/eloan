<?php

namespace App\Exports;

use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistrationsExport implements FromCollection, WithMapping, WithHeadings
{
    protected $registrations;

    public function __construct($registrations)
    {
        $this->registrations = $registrations;
    }

    public function collection()
    {
        return $this->registrations;
    }

    public function map($registrations): array
    {
        return [
            Carbon::parse($registrations->updated_at)->format('d-m-Y h:i A'),
            $registrations->name,
            $registrations->mobile,
            $registrations->city,
            $registrations->product->name,
            $registrations->pincode,
            $registrations->amount,
            $registrations->resource_type,
        ];
    }

    public function headings(): array
    {
        return [
            'Date',
            'Name',
            'Mobile Number',
            'City',
            'Product',
            'Pincode',
            'Loan Amount',
            'Plateform'
        ];
    }
}
