<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EnrolleeExport implements FromCollection, ShouldAutoSize, WithHeadings, WithMapping
{
    public $enrollees;
    private $header = [
        'Full Name',
        'Program',
        'Course',
        'Birth Date',
        'Age',
        'Contact Number',
        'Address',
        'Primary Email',
        'Secondary Email',
        'Years in Government',
        'Current Employer',
        'Position',
        'Department',
        'Professional License',
        'Registration Code',
        'Profile Picture Link',
        'Attachment Links Separated by comma (,)',
        'Date of Submission',
    ];

    public function __construct($enrollees)
    {
        $this->enrollees = $enrollees;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->enrollees;
    }

    public function map($enrollee): array
    {
        return [
            $enrollee->full_name,
            $enrollee->program->name,
            $enrollee->course->name,
            $enrollee->birth_date,
            $enrollee->age,
            $enrollee->contact_number,
            $enrollee->full_address,
            $enrollee->primary_email,
            $enrollee->secondary_email,
            $enrollee->years_in_government,
            $enrollee->current_employment,
            $enrollee->position,
            $enrollee->department,
            $enrollee->professional_license,
            $enrollee->registration_code,
            config('app.url')."/files/$enrollee->profile_picture",
            implode(', ', array_map(
                function ($attachment) {
                    return config('app.url')."/files/$attachment";
                },
                $enrollee->attachment_links
            )),
            $enrollee->created_at_converted,
        ];
    }

    public function headings(): array
    {
        return $this->header;
    }
}
