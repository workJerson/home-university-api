<?php

namespace App\Services;

use App\Models\School;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SchoolService
{
    public function __construct(){

    }

    public function index($filters, School $school)
    {
        $result = $school->filter($filters)
            ->where('status', '!=', 2);

        return $result;
    }

    public function store($request, School $school)
    {
        $result = $school->create($request->all());

        if ($request->image) {
            $path = Storage::putFile('images', $request->file('image'), 'public');
            $result->image_path = $path;
            $result->save();
        }
        return $result;
    }

    public function update($request, School $school){

        try {
            DB::beginTransaction();
            $school = $school->findOrFail($request->id);

            $school->update($request->all());

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
        return $school;
    }

    public function delete(School $school)
    {
        $school->status = 2;
        $school->save();
    }
}
