<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, Course $course)
    {
        return $this->generateCachedResponse(function () use ($filters, $course) {
            $courses = $course->with([
                'program',
                ])->filter($filters);

            return $this->paginateOrGet($courses);
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
    public function store(CreateCourseRequest $request, Course $course)
    {
        $courseObject = $course->create($request->validated());

        return response($courseObject, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $course->load([
            'program',
        ]);

        return $course;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        return response($course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->status = 2;
        $course->save();

        return response(['message' => 'Successfully deleted'], 200);
    }
}
