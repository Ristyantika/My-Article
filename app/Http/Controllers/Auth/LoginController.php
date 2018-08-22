<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Response;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $username = 'username';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->username();
    }
     public function username(){
        return $this->username;
     }

     public function loGinApi(Request $request){
        $data = $request->all();
        
        if(DB::table('users')->where('email', $data['email'])->exists()){
            $database = DB::table('users')->where('email', $data['email'])->get();
            if(Hash::check($data['password'] , $database[0]->password)){
                return Response::json($database,200);
            }
            return "Your Password is incorrect";
        }
        return "Your Email is incorrect";
    }
}
