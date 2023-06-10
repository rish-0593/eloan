<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'mobile',
        'city',
        'pincode',
        'amount',
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
