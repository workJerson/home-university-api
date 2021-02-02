<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollee extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'email_address',
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'contact_number',
        'user_id',
        'regcode',
        'provCode',
        'psgcCode',
        'years_in_government',
        'current_employment',
        'position',
        'enrollment_status',
        'program_id',
        'course_id',
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
            'years_in_government',
            'current_employment',
            'position',
            'enrollment_status',
            'program_name',
            'course_name',
            'status',
        ];
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'regcode', 'regCode');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provCode', 'provCode');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'psgcCode', 'psgcCode');
    }

    public function attachments()
    {
        return $this->hasMany(EnrolleeAttachment::class);
    }
}
