<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\Testimonial\CreateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, Testimonial $testimonial)
    {
        return $this->generateCachedResponse(function () use ($filters, $testimonial) {
            $testimonials = $testimonial->with([
                ])->filter($filters);

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
        try {
            DB::beginTransaction();
            $testimonialObject = $testimonial->create($request->validated());

            if ($request->image) {
                $path = Storage::putFile('images', $request->file('image'), 'public');
                $testimonialObject->image_path = $path;
                $testimonialObject->save();
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response($testimonialObject, 201);
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
        try {
            DB::beginTransaction();
            $testimonial->update($request->validated());

            if ($request->image) {
                $path = Storage::putFile('images', $request->file('image'), 'public');
                $testimonial->image_path = $path;
                $testimonial->save();
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response($testimonial);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->status = 2;
        $testimonial->save();

        return response(['message' => 'Successfully deleted'], 200);
    }
}
