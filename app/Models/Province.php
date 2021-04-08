<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    use Filterable;

    public function searchable()
    {
        return [
            'psgcCode',
            'provDesc',
            'regCode',
            'provCode',
        ];
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'provCode', 'provCode');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'regCode', 'regCode');
    }
}
