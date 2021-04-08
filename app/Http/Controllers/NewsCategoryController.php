<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\News\CreateNewsCategoryRequest;
use App\Models\NewsCategory;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, NewsCategory $newsCategory)
    {
        return $this->generateCachedResponse(function () use ($filters, $newsCategory) {
            $newsCategories = $newsCategory
                    ->filter($filters)
                    ->where('status', '!=', 2);

            return $this->paginateOrGet($newsCategories);
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
    public function store(CreateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        $newsCategory = $newsCategory;

        return response($newsCategory);
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
    public function update(CreateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->status = 2;
        $newsCategory->save();

        return response(['message' => 'Successfully deleted'], 200);
    }
}
