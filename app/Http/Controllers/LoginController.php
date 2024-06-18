<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helper;
use App\Http\Requests\OtpRequest;
use App\Models\OtpToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Random\RandomException;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    use Helper;



    public function verifyOtp(OtpRequest $request)

    {

        try {
            $userPhone = $request->input('phone');
            $userToken = $request->input('token');
            // Find the user by phone number
            $user = User::where('phone', $userPhone)->first();
            // Find the OTP token by token value
            $otpToken = OtpToken::where('token', $userToken)->first();
            if ($otpToken && $user && Carbon::now()->lte($otpToken->expires_at) && $otpToken->token == $userToken) {
                OtpToken::destroy($otpToken->id);
               return $this->ShowMessage(['token'=>$user->createToken('authToken')->plainTextToken],200);
            } else {
                return  $this->ShowMessage(['error'=>'token expired or wrong ! authentication failed!'],403);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }


    }

    /**
     * @throws RandomException
     */
    public function sendOtp(OtpRequest $request){
        try {
            $phone=$request->input('phone');
            $randToken=random_int(100000, 999999);
            $user = User::firstOrCreate([
                'phone' => $phone
            ]);
            $otpToken=new OtpToken();
            $otpToken->token=$randToken;
            $otpToken->user_id=$user->id;
            $otpToken->expires_at=Carbon::now()->addSecond(60);
            $otpToken->save();
            return  $this->ShowMessage(['message'=>"Otp Code send to $phone"],200);

        }
        catch (\Exception $e){
            return $e->getMessage();
        }









    }



}
