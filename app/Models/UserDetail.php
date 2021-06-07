<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    use Filterable;
    protected $appends = ['full_name'];

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'contact_number',
        'user_id',
        'regCode',
        'provCode',
        'psgcCode',
        'status',
    ];

    public function searchable()
    {
        return [
            'first_name',
            'last_name',
            'middle_name',
            'birth_date',
            'contact_number',
        ];
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'regCode', 'regCode');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provCode', 'provCode');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'psgcCode', 'psgcCode');
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->last_name).', '.ucfirst($this->first_name).' '.ucfirst($this->middle_name ?? '');
    }
}
