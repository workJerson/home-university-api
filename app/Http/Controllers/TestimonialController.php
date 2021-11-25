<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Testimonial\CreateTestimonialRequest;
use App\Models\Testimonial;
use App\Services\TestimonialService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new TestimonialService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, Testimonial $testimonial)
    {
        return $this->generateCachedResponse(function () use ($filters, $testimonial) {
            $testimonials = $this->service->index($filters, $testimonial);

            return $this->paginateOrGet($testimonials);
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
    public function store(CreateTestimonialRequest $request, Testimonial $testimonial)
    {
        $request->validated();
        $result = $this->service->store($request, $testimonial);

        return response($result, 201);
    }

    public function updateTestimony(CreateTestimonialRequest $request, Testimonial $testimonial)
    {
        $request->validated();
        $result = $this->service->update($request, $testimonial);
        return response($result);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return response($testimonial);
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
    public function update(CreateTestimonialRequest $request, Testimonial $testimonial)
    {
        $request->validated();
        $result = $this->service->update($request, $testimonial);
        return response($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->service->delete($testimonial);
        return response(['message' => 'Successfully deleted'], 200);
    }
}
