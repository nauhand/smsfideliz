<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Subuser;
use App\Admin;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

      public function redirectTo()
    {
        //toastr()->success('Bienvenue ' . \Auth::user()->firstname);
        return route('dashboard');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:subuser')->except('logout');
    }

    public function showAdminLoginForm()
        {
            return view('auth.login', ['url' => 'admin']);
        }

    public function adminLogin(Request $request)
        {
            $this->validate($request, [
                'username'   => 'required',
                'password' => 'required|min:8'
            ]);

            if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

                return redirect()->intended('/admin/tableau-de-bord/');
            }
            return back()->withInput($request->only('username', 'remember'));
        }

    public function showSubuserLoginForm()
           {
               return view('auth.login', ['url' => 'sous-compte']);
           }

    public function subuserLogin(Request $request)
           {
               $this->validate($request, [
                   'username'   => 'required',
                   'password' => 'required|min:8'
               ]);

               if (Auth::guard('subuser')->attempt(['username' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                   return redirect()->intended('/client/tableau-de-bord');
               }
               return back()->withInput($request->only('username', 'remember'));
           }

    public function username()
    {
        return 'username';
    }
}
