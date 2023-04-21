<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Lecturer;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
        
    }
    public function login(Request $request)
    {
        // $input=$request->input('email');
        $output=$request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(auth()->attempt(array('email' => $output['email'], 'password' => $output['password'])))
        {
            
            if (auth()->user()->role =='Admin') {
                return redirect()->route('admin.home');
            }
            elseif(auth()->user()->role =='Staff') {
                return redirect()->route('staff.home');
            }
            else{
                return redirect()->route('home');
            }
        }else{

            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
