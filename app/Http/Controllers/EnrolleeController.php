<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Enrollee\CreateEnrolleeRequest;
use App\Http\Requests\Enrollee\UpdateEnrolleeRequest;
use App\Models\Enrollee;
use App\Services\EnrolleeService;
use Illuminate\Support\Facades\Storage;

class EnrolleeController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new EnrolleeService();
    }

    public function generateCredential(Enrollee $enrollee)
    {
        return $this->service->downloadCredential($enrollee);
    }

    public function generateReport(ResourceFilters $filters, Enrollee $enrollee)
    {
        return $this->service->downloadReport($filters, $enrollee);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, Enrollee $enrollee)
    {
        return $this->generateCachedResponse(function () use ($filters, $enrollee) {
            $enrollees = $this->service->index($filters, $enrollee);

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
        $request->validate();
        $enrolleeObject = $this->service->store($request->all(), $enrollee);

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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnrolleeRequest $request, Enrollee $enrollee)
    {
        $request->validate();
        $enrollee = $this->service->update($request->all(), $enrollee);

        return response($enrollee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollee $enrollee)
    {
        $this->service->delete($enrollee);

        return response(['message' => 'Successfully deleted.'], 200);
    }
}
