<?php

namespace App\Http\Controllers;

use App\Models\OtpToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Random\RandomException;

class LoginController extends Controller
{
    /**
     * @throws RandomException
     */
    public function generateOtp(Request $request){
    }
    public function verifyOtp(Request $request)
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
                Auth::login($user);
                return response()->json(['token'=>$user->createToken('authToken')->plainTextToken],200);

            } else {
                return 'Invalid token or token not found';
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }


    }

    /**
     * @throws RandomException
     */
    public function sendOtp(Request $request){
        try {
            $phone=$request->input('phone');
            $randToken=random_int(100000, 999999);
            $user=User::where('phone',$phone)->first();
            $otpToken=new OtpToken();
            $otpToken->token=$randToken;
            $otpToken->user_id=$user->id;
            $otpToken->expires_at=Carbon::now()->addSecond(60);
            $otpToken->save();

        }
        catch (\Exception $e){
            return $e->getMessage();
        }









    }



}
