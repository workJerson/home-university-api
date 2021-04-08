<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\School;
use App\Models\Testimonial;

class LandingPageController extends Controller
{
    public function __invoke(Program $program, School $school, Testimonial $testimonial)
    {
        $response = [];
        $response['programs'] = $program->with(['courses'])->get();
        $response['schools'] = $school->orderBy('order', 'ASC')->limit(4)->get(['name', 'image_path', 'order']);
        $response['testimonials'] = $testimonial->limit(6)->get();

        return response($response);
    }
}
