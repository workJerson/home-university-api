<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolleeSchool extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
        'year_graduated',
        'address',
        'type',
        'enrollee_id',
    ];

    public function enrollee()
    {
        return $this->belongsTo(Enrollee::class);
    }
}
