<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'icon', 'link', 'status',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 1);
    }
}
