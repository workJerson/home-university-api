<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\News\CreateNewsRequest;
use App\Models\News;
use App\Models\NewsImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, News $news)
    {
        return $this->generateCachedResponse(function () use ($filters, $news) {
            $newsList = $news
                    ->filter($filters)
                    ->where('status', '!=', 2)
                    ->with(['category']);

            return $this->paginateOrGet($newsList);
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
    public function store(CreateNewsRequest $request, News $news)
    {
        $attachments = [];
        try {
            DB::beginTransaction();
            $newsObject = $news->create($request->validated());

            if ($request->image_path) {
                $path = Storage::putFile('images', $request->file('image_path'), 'public');
                $newsObject->image_path = $path;
                $newsObject->save();
            }

            if ($request->attachments) {
                foreach ($request->file('attachments') as $key => $file) {
                    $path = Storage::putFile('images', $file, 'public');
                    $attachments[] = [
                        'image_path' => $path,
                        'news_id' => $newsObject->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
                NewsImage::insert($attachments);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response($newsObject, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $news = $news->load([
            'images',
            'category',
            'createdBy',
        ]);

        return response($news);
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
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->status = 2;
        $news->save();

        return response(['message' => 'Successfully deleted.']);
    }
}
