<?php

namespace App\Http\Controllers;
use App\Models\M_User;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class C_Auth extends Controller
{
    public function authsite()
    {
        return redirect('/auth/login');
    }

    public function loginpage()
    {
        return view('auth.loginpage');
    }

    public function loginprocess(Request $request)
    {
        // {'username':username, 'password':password}
        $tUser = M_User::where('username', $request -> username) -> count();
        if($tUser < 1){
            $status = "NO_USER";
            $token = "";
        }else{
            $dUser = M_User::where('username', $request -> username) -> first();
            $cekUser = password_verify($request -> password, $dUser -> password);
            if($cekUser == true){
                $status = "SUCCESS";
                $key = env('JWT_KEY');
                $payload = array(
                    "username" => $request -> username
                );
                $jwt = JWT::encode($payload, $key, 'HS256');
                // setcookie("APP_TOKEN_4412", $jwt);
                setcookie("APP_TOKEN_4467", $jwt, time() + (86400 * 30), "/"); // 86400 = 1 day
                $token = $jwt;
            }else{
                $status = "WRONG_PASSWORD";
                $token = "";
            }
            
        }
        $dr = ['status' => $status, 'token' => $token];
        return \Response::json($dr);
    }

    public function logout(Request $request)
    {
        unset($_COOKIE['APP_TOKEN_4467']); 
        $request -> session() -> flush();
        return redirect('/auth/login');
    }

}
