<?php

namespace App\Services;

use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialService
{
    public function __construct(){

    }
    public function index($filters, Testimonial $testimonial)
    {
        $result = $testimonial->with([
            ])->filter($filters);

        return $result;
    }
    public function store($request, Testimonial $testimonial){
        try {
            DB::beginTransaction();
            $result = $testimonial->create($request->all());

            if ($request->image) {
                $path = Storage::putFile('images', $request->file('image'), 'public');
                $result->image_path = $path;
                $result->save();
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        return $result;
    }
    public function update($request, Testimonial $testimonial)
    {

        try {
            DB::beginTransaction();
            $testimonial = $testimonial->findOrFail($request->id);
            $testimonial->update($request->all());

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
    }
    public function delete(Testimonial $testimonial)
    {
        $testimonial->status = 2;
        $testimonial->save();
    }
}
