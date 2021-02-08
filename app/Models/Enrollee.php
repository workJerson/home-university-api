<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollee extends Model
{
    use HasFactory;
    use Filterable;

    protected $appends = ['full_name', 'full_address', 'attachment_links', 'high_school', 'college', 'masters'];

    protected $fillable = [
        'primary_email',
        'secondary_email',
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'contact_number',
        'user_id',
        'regCode',
        'provCode',
        'psgcCode',
        'years_in_government',
        'current_employment',
        'position',
        'enrollment_status',
        'program_id',
        'course_id',
        'age',
        'department',
        'address',
        'zip',
        'profile_picture',
        'professional_license',
        'registration_code',
        'status',
    ];

    public function searchable()
    {
        return [
            'primary_email',
            'secondary_email',
            'first_name',
            'last_name',
            'middle_name',
            'birth_date',
            'contact_number',
            'user_id',
            'regCode',
            'provCode',
            'psgcCode',
            'years_in_government',
            'current_employment',
            'position',
            'age',
            'department',
            'address',
            'zip',
            'profile_picture',
            'professional_license',
            'enrollment_status',
            'program_name',
            'course_name',
            'status',
        ];
    }

    public function getHighSchoolAttribute()
    {
        return $this->enrolleeSchools->where('type', 'HS')->first();
    }

    public function getCollegeAttribute()
    {
        return $this->enrolleeSchools->where('type', 'CL')->first();
    }

    public function getMastersAttribute()
    {
        return $this->enrolleeSchools->where('type', 'MS')->first();
    }

    public function getCreatedAtConvertedAttribute()
    {
        return $this->created_at->timezone('Asia/Manila')->toDayDateTimeString();
    }

    public function getAttachmentLinksAttribute()
    {
        return $this->attachments->pluck('file_path')->toArray();
    }

    public function getFullAddressAttribute()
    {
        return ucfirst($this->address)
        .', '.ucfirst($this->zip)
        .', '.ucfirst($this->city->citymunDesc)
        .', '.ucfirst($this->province->provDesc)
        .', '.ucfirst($this->region->regDesc);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->last_name).', '.ucfirst($this->first_name).' '.ucfirst($this->middle_name ?? '');
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

    public function attachments()
    {
        return $this->hasMany(EnrolleeAttachment::class);
    }

    public function enrolleeSchools()
    {
        return $this->hasMany(EnrolleeSchool::class);
    }
}
