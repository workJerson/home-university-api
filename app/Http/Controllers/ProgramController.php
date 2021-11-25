<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Program\CreateProgramRequest;
use App\Models\Program;
use App\Services\ProgramService;

class ProgramController extends Controller
{
    protected $service;

    public function __constructor()
    {
        $this->service = new ProgramService();
    }

    public function __invoke(Program $program)
    {
        return response($program->with(
            [
                'courses' => function ($courses) {
                    $courses->where('status', 1);
                },
                'rates' => function ($rates) {
                    $rates->where('status', 1);
                },
            ])->get());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, Program $program)
    {
        return $this->generateCachedResponse(function () use ($filters, $program) {
            $programs = $this->service->index($filters, $program);

            return $this->paginateOrGet($programs);
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
    public function store(CreateProgramRequest $request, Program $program)
    {
        $request->validate();
        $result = $this->service->store($request->all(), $program);

        return response($result, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        $program->load([
            'courses',
        ]);

        return response($program);
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
    public function update(CreateProgramRequest $request, Program $program)
    {
        $request->validate();
        $program = $this->service->update($request->all(), $program);

        return response($program);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $this->service->delete($program);

        return response(['message' => 'Successfully deleted'], 200);
    }
}
