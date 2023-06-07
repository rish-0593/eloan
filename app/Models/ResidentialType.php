<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResidentialType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'status',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 1);
    }
}
