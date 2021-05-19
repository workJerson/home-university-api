<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramRate extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'description',
        'period',
        'total_amount',
        'payment_remarks',
        'status',
        'program_id',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
