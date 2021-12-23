<?php

namespace App\http\Services;

use App\Models\User;
use App\Models\Users_verfication;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\Request;

class VerificationServices
{
    public function setVerificationCode($data)
    {
        $code = mt_rand(100000, 999999);
        $data['code'] = $code;

        Users_verfication::whereNotNull('user_id')
            ->where(['user_id' => $data['user_id']])->delete();
        //verificationCode::whereNotNull('receiver')->where(['receiver' => $data['receiver']])->delete();

        return Users_verfication::create($data);
    }

    public function getSMSVerifyMessageByAppName($code)
    {
        $message = "Is Your Verification Code For Your AXA OneHealth Account";

        return $code.$message;
    }

    public function checkOTPCode($code)
    {
        if(Auth::guard()->check()){
            $verficationData = Users_verfication::where('user_id', Auth::id()->first());

            if($verficationData->code == $code){
                User::whereId(Auth::id())->update(['email_verified_at' => now()]);
                return true;
            }else{
                return false;
            }
        }
        return false;
    }

    public function removeOTPCode()
    {
        Users_verfication::where('code', $code)->delete();
    }
}
