<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'title',
        'header',
        'description',
        'image_path',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(NewsImage::class);
    }
}
