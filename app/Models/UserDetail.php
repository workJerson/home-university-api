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
        'address',
        'birth_date',
        'contact_number',
        'user_id',
        'status',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
