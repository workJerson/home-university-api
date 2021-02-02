<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Enrollee\CreateEnrolleeRequest;
use App\Models\Enrollee;
use App\Models\EnrolleeAttachment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EnrolleeController extends Controller
{
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
