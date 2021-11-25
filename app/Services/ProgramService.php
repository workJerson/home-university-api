<?php

namespace App\Services;

use App\Models\Program;

class ProgramService
{
    public function __construct()
    {
    }

    public function index($filters, Program $program)
    {
        $programs = $program
            ->with([])
            ->filter($filters);

        return $programs;
    }

    public function store($request, Program $program)
    {
        $result = $program->create($request);

        return $result;
    }

    public function update($request, Program $program)
    {
        $program->update($request);

        return $program;
    }

    public function delete(Program $program)
    {
        $program->status = 2;
        $program->save();
    }
}
