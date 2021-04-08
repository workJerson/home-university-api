<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolleeAttachment extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'file_type',
        'file_name',
        'file_path',
        'enrollee_id',
    ];

    public function enrollee()
    {
        return $this->belongsTo(Enrollee::class);
    }
}
