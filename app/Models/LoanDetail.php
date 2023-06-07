<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id', 'employment_status_id', 'email',
        'income', 'gender_id', 'marital_status_id', 'date_of_birth',
        'residential_type_id', 'residential_address'
    ];
}
