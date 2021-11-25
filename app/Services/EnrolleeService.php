<?php

namespace App\Services;

use App\Exports\EnrolleeExport;
use App\Models\Enrollee;
use App\Models\EnrolleeAttachment;
use App\Models\EnrolleeSchool;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class EnrolleeService
{
    public function __construct()
    {
    }

    public function downloadCredential(Enrollee $enrollee)
    {
        $enrollees['enrollees'] = [$enrollee->load(
                [
                    'program',
                    'course',
                    'region',
                    'province',
                    'city',
                    'attachments',
                ]
            ),
        ];

        $pdf = PDF::loadView('pdf.credential', $enrollees);
        $fileName = Carbon::now()->format('Ymdhis');

        return $pdf->download("CRED$fileName.pdf");
    }

    public function downloadReport($filters, Enrollee $enrollee)
    {
        $date = Carbon::now()->format('Ymdhis');

        return Excel::download(
            new EnrolleeExport(
                $enrollee
                    ->filter($filters)
                    ->with([
                    ])
                    ->get()
            ), "ENROLLEES$date.xlsx");
    }

    public function index($filters, Enrollee $enrollee)
    {
        $result = $enrollee->with([
            'program',
            'course',
            'region',
            'province',
            'city',
            'attachments',
            ])->filter($filters);

        return $result;
    }

    public function store($request, Enrollee $enrollee)
    {
        try {
            DB::beginTransaction();
            $attachments = [];
            $enrolleeObject = $enrollee->create($request->all());

            if ($request->hs_name) {
                EnrolleeSchool::create([
                    'name' => $request->hs_name,
                    'type' => 'HS',
                    'enrollee_id' => $enrolleeObject->id,
                ]);
            }

            if ($request->college_name) {
                EnrolleeSchool::create([
                    'name' => $request->college_name,
                    'type' => 'CL',
                    'enrollee_id' => $enrolleeObject->id,
                ]);
            }

            if ($request->masters_name) {
                EnrolleeSchool::create([
                    'name' => $request->masters_name,
                    'type' => 'MS',
                    'enrollee_id' => $enrolleeObject->id,
                ]);
            }

            if ($request->profile_picture) {
                $path = Storage::putFile('images', $request->file('profile_picture'), 'public');
                $enrolleeObject->profile_picture = $path;
                $enrolleeObject->save();
            }

            if ($request->attachments) {
                foreach ($request->file('attachments') as $key => $file) {
                    $path = Storage::putFile('images', $file, 'public');
                    $attachments[] = [
                        'file_type' => $file->extension(),
                        'file_name' => basename($path),
                        'file_path' => $path,
                        'enrollee_id' => $enrolleeObject->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
                EnrolleeAttachment::insert($attachments);
            }
            DB::commit();
            // Mail::to($enrolleeObject->primary_email)->send(new EmailSend(['name' => $enrolleeObject->full_name, 'subject' => 'Pre-Enrollment'], 'mail.enrollee.new'));
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return $enrolleeObject;
    }

    public function update($request, Enrollee $enrollee)
    {
        try {
            DB::beginTransaction();

            if ($request->enrollment_status) {
                switch ($request->enrollment_status) {
                    case 1:
                        // code...
                        break;

                    default:
                        // code...
                        break;
                }
            }
            $enrollee->update($request->all());

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return $enrollee;
    }

    public function delete(Enrollee $enrollee)
    {
        $enrollee->status = 2;
        $enrollee->save();
    }
}
