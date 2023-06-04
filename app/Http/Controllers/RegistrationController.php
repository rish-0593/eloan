<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        Registration::updateOrCreate(
            [
                'mobile' => $request->mobile
            ],
            [
                'name' => $request->name,
                'email' => $request->email,
                'purpose_of_loan' => $request->purpose_of_loan,
            ]
        );

        return redirect()->route('apply.for.loan');
    }
}
