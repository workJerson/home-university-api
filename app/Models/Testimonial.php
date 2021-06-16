<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'first_name',
        'last_name',
        'testimony',
        'image_path',
        'status',
    ];

    public function searchable()
    {
        return [
            'last_name',
            'testimony',
            'image_path',
            'status',
        ];
    }

    public function getImagePathAttribute()
    {
        return config('app.url').'/api/public/files/'.$this->attributes['image_path'];
    }
}
