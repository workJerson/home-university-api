<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Models\Course;
use App\Services\CourseService;

class CourseController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new CourseService();
    }

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
        $request->validated();
        $result = $this->service->create($request->all());

        return response($result, 201);
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
        $request->validated();
        $result = $this->service->update($request->all(), $course);

        return response($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $this->service->delete($course);

        return response(['message' => 'Successfully deleted'], 200);
    }
}
