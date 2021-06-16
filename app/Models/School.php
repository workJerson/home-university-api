<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class School extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
        'school_email',
        'address',
        'user_id',
        'image_path',
        'order',
        'regCode',
        'provCode',
        'psgcCode',
        'status',
    ];

    public function searchable()
    {
        return [
            'name',
            'school_email',
            'address',
            'status',
            'user_detail_first_name',
            'user_detail_last_name',
            'user_detail_middle_name',
            'user_detail_birth_date',
            'user_detail_contact_number',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function setImagePathAttribute()
    {
        $this->attribute['image_path'] = Str::contains($this->image_path, 'hu-landing.s3-website-ap-southeast-1.amazonaws.com')
            ? $this->image_path
            : config('app.url').'/api/public/files/'.$this->image_path;
    }
}
