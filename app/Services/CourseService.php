<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{
    public function __construct()
    {
    }

    public function create($request)
    {
        $result = Course::create($request);

        return $result;
    }

    public function update($request, $course)
    {
        $result = $course->update($request);

        return $result;
    }

    public function delete($course)
    {
        $course->status = 2;
        $course->save();
    }
}
