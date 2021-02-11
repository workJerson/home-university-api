<?php

namespace App\Http\Controllers;

use App\Exports\EnrolleeExport;
use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Enrollee\CreateEnrolleeRequest;
use App\Mail\EmailSend;
use App\Models\Enrollee;
use App\Models\EnrolleeAttachment;
use App\Models\EnrolleeSchool;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class EnrolleeController extends Controller
{
    public function generateCredential(Enrollee $enrollee)
    {
        $enrollees['enrollees'] = [$enrollee
            ->load([
                'program',
                'course',
                'region',
                'province',
                'city',
                'attachments',
            ]), ];

        $pdf = PDF::loadView('pdf.credential', $enrollees);
        $fileName = Carbon::now()->format('Ymdhis');

        return $pdf->download("CRED$fileName.pdf");
    }

    public function generateReport(ResourceFilters $filters, Enrollee $enrollee)
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, Enrollee $enrollee)
    {
        return $this->generateCachedResponse(function () use ($filters, $enrollee) {
            $enrollees = $enrollee->with([
                'program',
                'course',
                'region',
                'province',
                'city',
                'attachments',
                ])->filter($filters);

            return $this->paginateOrGet($enrollees);
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEnrolleeRequest $request, Enrollee $enrollee)
    {
        try {
            DB::beginTransaction();
            $attachments = [];
            $enrolleeObject = $enrollee->create($request->validated());

            if ($request->hs_name) {
                EnrolleeSchool::create([
                    'name' => $request->hs_name,
                    // 'year_graduated' => $request->hs_year_graduated ?? '',
                    // 'address' => $request->hs_address ?? '',
                    'type' => 'HS',
                    'enrollee_id' => $enrolleeObject->id,
                ]);
            }

            if ($request->college_name) {
                EnrolleeSchool::create([
                    'name' => $request->college_name,
                    // 'year_graduated' => $request->college_year_graduated ?? '',
                    // 'address' => $request->college_address ?? '',
                    'type' => 'CL',
                    'enrollee_id' => $enrolleeObject->id,
                ]);
            }

            if ($request->masters_name) {
                EnrolleeSchool::create([
                    'name' => $request->masters_name,
                    // 'year_graduated' => $request->masters_year_graduated ?? '',
                    // 'address' => $request->masters_address ?? '',
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
            Mail::to($enrolleeObject->primary_email)->send(new EmailSend(['name' => $enrolleeObject->full_name, 'subject' => 'Pre-Enrollment'], 'mail.enrollee.new'));
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response($enrolleeObject, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollee $enrollee)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
