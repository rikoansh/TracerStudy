<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Entrust;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $username= 'username'; //defaultnya email
    protected $loginPath= '/login'; //default nya auth/login
    protected $redirectPath = '/';
    protected $redirectAfterLogout = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }
        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }
        if (Entrust::hasRole('admin'))
        {
            return redirect()->intended('admin');
        }
        elseif (Entrust::hasRole('akademik'))
        {
            return redirect()->intended('akademik/home');
        }

        elseif (Entrust::hasRole('kemahasiswaan'))
        {
            return redirect()->intended('kemahasiswaan/home');
        }

        elseif (Entrust::hasRole('rektor'))
        {
            return redirect()->intended('rektor/home');
        }

        elseif (Entrust::hasRole('dekan'))
        {
            return redirect()->intended('dekan/home');
        }

        elseif (Entrust::hasRole('prodi'))
        {
            return redirect()->intended('prodi/home');
        }

        else
        {
            return redirect()->intended('home');
        }
    }
}
