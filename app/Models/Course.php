<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
        'description',
        'program_id',
        'status',
    ];

    public function searchable()
    {
        return [
            'name',
            'description',
            'status',
        ];
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function enrollees()
    {
        return $this->hasMany(Enrollee::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
