<?php

namespace App;

use App\Traits\Model\UseStorage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Jeylabs\AuditLog\Traits\LogsAudit;
use Laravel\Passport\HasApiTokens;

/**
 * Class User
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $mobile
 * @property string $email
 * @property mixed $role
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable, UseStorage, LogsAudit;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'mobile', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * Get the user's role
     * @return BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the audit log name
     * @param string $eventName
     * @return string
     */
    public function getLogNameToUse(string $eventName = ''): string
    {
        return 'user';
    }
}
