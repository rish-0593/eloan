<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoanDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id', 'employment_status_id', 'email',
        'income', 'gender_id', 'marital_status_id', 'date_of_birth',
        'residential_type_id', 'residential_address'
    ];

    function gender() : BelongsTo {
        return $this->belongsTo(Gender::class);
    }

    function employmentStatus() : BelongsTo {
        return $this->belongsTo(EmploymentStatus::class);
    }

    function maritalStatus() : BelongsTo {
        return $this->belongsTo(MaritalStatus::class);
    }

    function residentialType() : BelongsTo {
        return $this->belongsTo(ResidentialType::class);
    }
}
