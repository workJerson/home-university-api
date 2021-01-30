<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'contact_number',
        'user_id',
        'regcode',
        'provCode',
        'psgcCode',
        'status',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'regcode', 'regcode');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provCode', 'provCode');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'psgcCode', 'psgcCode');
    }
}
