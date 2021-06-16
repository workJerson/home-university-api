<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\School\CreateSchoolRequest;
use App\Models\School;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, School $school)
    {
        return $this->generateCachedResponse(function () use ($filters, $school) {
            $schools = $school
                    ->filter($filters)
                    ->where('status', '!=', 2);

            return $this->paginateOrGet($schools);
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
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSchoolRequest $request, School $school)
    {
        $request = $request;
        $schoolObject = $school->create($request->validated());

        if ($request->image) {
            $path = Storage::putFile('images', $request->file('image'), 'public');
            $schoolObject->image_path = $path;
            $schoolObject->save();
        }

        return response($schoolObject, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $school = $school;

        return response($school);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSchoolRequest $request, School $school)
    {
        try {
            DB::beginTransaction();
            $school->update($request->validated());

            if ($request->image) {
                $path = Storage::putFile('images', $request->file('image'), 'public');
                $school->image_path = $path;
                $school->save();
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response($school);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->status = 2;
        $school->save();

        return response(['message' => 'Successfully deleted'], 200);
    }
}
