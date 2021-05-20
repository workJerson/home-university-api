<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function rates()
    {
        return $this->hasMany(ProgramRate::class);
    }
}
