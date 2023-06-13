<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportHasRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'registration_id',
        'status_id',
        'status_updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
