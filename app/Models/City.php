<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    use Filterable;

    public function searchable()
    {
        return [
            'psgcCode',
            'citymunDesc',
            'regDesc',
            'provCode',
            'citymunCode',
        ];
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provCode', 'provCode');
    }
}
