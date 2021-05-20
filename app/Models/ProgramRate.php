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
        'status',
        'program_id',
    ];

    protected $hidden = ['program'];

    protected $appends = [
        'url_with_params',
        'url_without_params',
        'payment_remarks',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function getPaymentRemarksAttribute()
    {
        $name = $this->program->name;

        return 'Payment+for+'.$name."+program+($this->period)";
    }

    public function getUrlWithParamsAttribute()
    {
        return env('DPAYURL').'merchantid='.env('DPAYMERCHANTID')."&amount=$this->total_amount&remarks=$this->payment_remarks";
    }

    public function getUrlWithOutParamsAttribute()
    {
        return env('DPAYURL').'merchantid='.env('DPAYMERCHANTID');
    }
}
