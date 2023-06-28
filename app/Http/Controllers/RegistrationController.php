<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\City;
use App\Models\Gender;
use App\Models\Product;
use App\Models\LoanDetail;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\MaritalStatus;
use App\Mail\RegistrationMail;
use App\Models\ResidentialType;
use App\Models\EmploymentStatus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::active()->get();
        $cities = City::active()->pluck('name');

        return view('index', compact('products', 'cities'));
    }

    public function register(Request $request)
    {
        Registration::updateOrCreate(
            [
                'mobile' => $request->mobile
            ],
            [
                'product_id' => $request->product,
                'name' => $request->name,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'amount' => $request->amount,
                'resource_type' => $request->_r,
            ]
        );

        Mail::to(config('app.emails'))->send(new RegistrationMail($request->mobile));

        return redirect()->route('apply.for.loan', [
            '_m' => Crypt::encrypt($request->mobile)
        ]);
    }

    public function applyForLoan(Request $request)
    {
        if(blank($request->_m)){
            return redirect()->route('index');
        }

        try {
            $mobile = Crypt::decrypt($request->_m);
            $registration = Registration::where('mobile', $mobile)->count();

            if($registration == 0){
                return redirect()->route('index');
            }

            $employmentStatuses = EmploymentStatus::active()->get();
            $genders = Gender::active()->get();
            $maritalStatuses = MaritalStatus::active()->get();
            $residentialTypes = ResidentialType::active()->get();

            return view('apply-for-loan', compact('employmentStatuses', 'genders', 'maritalStatuses', 'residentialTypes'));
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function submit(Request $request)
    {
        if(blank($request->_m)){
            return redirect()->route('index');
        }

        try {
            $mobile = Crypt::decrypt($request->_m);
            $registration = Registration::where('mobile', $mobile)->first();

            if(!$registration){
                return redirect()->route('index');
            }

            LoanDetail::updateOrCreate(
                [
                    'registration_id' => $registration->id
                ],
                [
                    'employment_status_id' => $request->employment_status,
                    'email' => $request->email,
                    'income' => $request->income,
                    'gender_id' => $request->gender,
                    'marital_status_id' => $request->marital_status,
                    'date_of_birth' => Carbon::parse($request->date_of_birth)->format('Y-m-d'),
                    'residential_type_id' => $request->residential_type,
                    'residential_address' => $request->residential_address,
                ]
            );

            return redirect()->route('thank.you', [
                '_m' => Crypt::encrypt($mobile)
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('index');
        }
    }

    public function thankYou(Request $request)
    {
        if(blank($request->_m)){
            return redirect()->route('index');
        }

        try {
            $mobile = Crypt::decrypt($request->_m);

            $registration = Registration::where('mobile', $mobile)->first();

            return view('thank-you');
        } catch (\Throwable $th) {
            return redirect()->route('index');
        }
    }
}
