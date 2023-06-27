<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'name',
        'mobile',
        'city',
        'pincode',
        'amount',
        'resource_type',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function loanDetails()
    {
        return $this->hasOne(LoanDetail::class);
    }

    public function supportHasRegistration()
    {
        return $this->hasOne(SupportHasRegistration::class);
    }
}
