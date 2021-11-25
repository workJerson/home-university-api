<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\School\CreateSchoolRequest;
use App\Models\School;
use App\Services\SchoolService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    protected $service;
    public function __construct()
    {
        $this->service = new SchoolService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, School $school)
    {
        return $this->generateCachedResponse(function () use ($filters, $school) {
            $schools = $this->service->index($filters, $school);

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
        $request->validated();
        $result = $this->service->store($request, $school);

        return response($result, 201);
    }

    public function updateSchool(CreateSchoolRequest $request, School $school)
    {
        $request->validated();
        $school = $this->service->update($request, $school);

        return response($school);
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
        $request->validated();
        $school = $this->service->update($request, $school);

        return response($school);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $this->service->delete($school);

        return response(['message' => 'Successfully deleted'], 200);
    }
}
