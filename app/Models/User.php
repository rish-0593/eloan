<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Lab404\Impersonate\Models\Impersonate;
use Lab404\Impersonate\Services\ImpersonateManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles, HasApiTokens, HasFactory, Notifiable, Impersonate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'plain_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get Impersonator.
     *
     * @param void
     * @return  bool
     */
    public function impersonator()
    {
        if ($this->isImpersonated()) {
            return $this->find(app(ImpersonateManager::class)->getImpersonatorId());
        }
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 1);
    }

    function supportStatusUpdated() : HasOne {
        return $this->hasOne(SupportHasRegistration::class)->latest('status_updated_at');
    }

    function pendingSupport() : HasMany {
        return $this->hasMany(SupportHasRegistration::class)->whereNull('status_id');
    }

    function completedSupport() : HasMany {
        return $this->hasMany(SupportHasRegistration::class)->whereNotNull('status_id');
    }

    function support() : HasMany {
        return $this->hasMany(SupportHasRegistration::class);
    }
}
