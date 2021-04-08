<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'image_path',
        'news_id',
        'status',
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
