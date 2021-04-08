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
        // 'Professional License',
        'Registration Code',
        'High School',
        // 'High Graduated Year',
        // 'High School Address',
        'College School',
        // 'College Graduated Year',
        // 'College School Address',
        "Master's School",
        // "Master's Graduated Year",
        // "Master's School Address",
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
            // $enrollee->professional_license,
            $enrollee->registration_code,
            optional($enrollee->high_school)->name ?? '',
            // optional($enrollee->high_school)->year_graduated ?? '',
            // optional($enrollee->high_school)->address ?? '',
            optional($enrollee->college)->name ?? '',
            // optional($enrollee->college)->year_graduated ?? '',
            // optional($enrollee->college)->address ?? '',
            optional($enrollee->masters)->name ?? '',
            // optional($enrollee->masters)->year_graduated ?? '',
            // optional($enrollee->masters)->address ?? '',
            config('app.url')."/api/public/files/$enrollee->profile_picture",
            implode(', ', array_map(
                function ($attachment) {
                    return config('app.url')."/api/public/files/$attachment";
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
