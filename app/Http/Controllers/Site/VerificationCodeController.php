<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerificationRequest;
use App\Http\Services\VerificationServices;
use App\Models\Users_verfication;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\VerifyCode;

class VerificationCodeController extends Controller
{
    public $verificationService;

    public function __construct(VerificationServices $verificationService)
    {
        $this->verificationService = $verificationService;
    }

    public function verify(VerificationRequest $request)
    {
        $check = $this->verificationService->checkOTPCode($request->code);

        if(!$check){
            return redirect()->route('get.verification.form')
                    ->withErrors([
                        'code' => 'You Enter Worng Code'
                    ]);
        }else{
            $this->verificationService->removeOTPCode($request->code);
            return redirect()->route('home');
        }
    }

    public function getVerifyPage()
    {
        return view('auth.verification');
    }
}
