<?php

namespace App\Models;

use App\Mail\EmailSend;
use App\Traits\Filterable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordClass;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements CanResetPasswordClass
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;
    use CanResetPassword;
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'account_type',
        'status',
        'login_attempts',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Increment the login attempts of the user.
     */
    public function incrementLoginAttempts()
    {
        $this->increment('login_attempts');

        if ($this->login_attempts >= 3) {
            $this->deactivate();
        }
    }

    /**
     * Clear the user's number of login attempts.
     */
    public function clearLoginAttempts()
    {
        $this->login_attempts = 0;
        $this->save();
    }

    /**
     * Deactivate the user.
     */
    public function deactivate()
    {
        $this->status = 0;

        $this->save();
    }

    public function findForPassport($email)
    {
        return self::where('email', $email)->first();
    }

    /**
     * Set Password Attribute of User.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function sendPasswordResetNotification($token, $spielCode = null)
    {
        $params = http_build_query([
            'token' => Password::getRepository()->create($this),
            'email' => $this->attributes['email'],
        ]);
        $url = env('CMS_URL')."/auth/reset-password?$params";

        Mail::to($this->email)->send(
            new EmailSend([
                        'name' => $this->userDetail->full_name,
                        'url' => $url,
                        'subject' => 'Reset Password', ], 'mail.user.reset-password'));
    }

    /**
     * @var int
     *          Account Type
     *          SuperAdmin =1
     *          AdminStaff = 2
     *          SchoolAdmin = 3
     *          Student = 4
     */
    public function isSuperAdmin()
    {
        return $this->account_type = 1;
    }

    public function isAdminStaff()
    {
        return $this->account_type = 2;
    }

    public function isSchoolAdmin()
    {
        return $this->account_type = 3;
    }

    public function isStudent()
    {
        return $this->account_type = 4;
    }

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function school()
    {
        return $this->hasOne(School::class);
    }
}
