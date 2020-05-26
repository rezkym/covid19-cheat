<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; 
use Auth;
use App\User;

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
        /** 
         * Set Type Login
         * Email or Username
        */
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        /**
         * Condition Type Login
         */
        if($loginType == 'email')
        {
            /** 
             * Manual email validation
             */
            $UsersEmail = User::where('email', $request->username)->get();

            /**
             * Message Rules
             * 
             * @return array
             */
            $messages = [
                
                "email.email"           => "Format email salah",
                "email.unique"          => "Email tidak di temukan",
                "password.required"     => "Kata sandi tidak boleh kosong",
                "password.min"          => "Kata sandi minimal 4 karakter"
            ];
    
            /** 
             * Validator Rules
             * 
             * @return array
             */
            $validator = Validator::make(
                $request->all(), 
                [
                    'email'     => 'email|unique:users,email',
                    'password'  => 'required|min:4'
                ], 
                $messages
            );
    
            /**
             * Run Authentication Validation
             * 
             * @return void
             */
            if ($UsersEmail->count() == 0 OR $UsersEmail->count() > 1) 
            {
                /**
                 * If validator false
                 * 
                 * @return array
                 */
                return back()->withErrors(['email' => 'Email tidak di temukan'])->withInput();

            } else if($validator->fails())
            {
                /**
                 * If validator false
                 * 
                 * @return array
                 */
                return back()->withErrors($validator)->withInput();
            }
            {
                /**
                 * Run Auth:attempt
                 */
                if (Auth::attempt(['email' => $request->username, 'password' => $request->password, 'account_status' => 'active'])) 
                {
                    
                    /**
                     * If Login successfuly, redirect to dashboard
                     */
                    return redirect()->intended(route('home'));
                }
    
                /**
                 * If login unsuccessful
                 */
                // if unsuccessful -> redirect back
                return redirect()->back()->withInput($request->only('username'))->withErrors(
                    [
                        'password' => 'Kata sandi salah.',
                    ]
                );
            }

        } else if($loginType == 'username')
        {
            /**
             * Message Rules
             * 
             * @return array
             */
            $messages = [
                "username.required"     => "Username tidak boleh kosong",
                "username.min"          => "Username minimal 4 karakter",
                "username.exists"       => "Username tidak di temukan",
                "password.required"     => "Kata sandi tidak boleh kosong",
                "password.min"          => "Kata sandi minimal 4 karakter"
            ];
    
            /** 
             * Validator Rules
             * 
             * @return array
             */
            $validator = Validator::make(
                $request->all(), 
                [
                    'username'  => 'required|min:4|exists:users,username',
                    'password'  => 'required|min:4'
                ], 
                $messages
            );
    
            /**
             * Run Authentication Validation
             * 
             * @return void
             */
            if ($validator->fails()) 
            {
                /**
                 * If validator false
                 * 
                 * @return array
                 */
                return back()->withErrors($validator)->withInput();

            } else 
            {
                /**
                 * Run Auth:attempt
                 */
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'account_status' => 'active'])) 
                {
                    
                    /**
                     * If Login successfuly, redirect to dashboard
                     */
                    return redirect()->intended(route('home'));
                }
    
                /**
                 * If login unsuccessful
                 */
                // if unsuccessful -> redirect back
                return redirect()->back()->withInput($request->only('username'))->withErrors(
                    [
                        'password' => 'Kata sandi salah.',
                    ]
                );
            }
        }

    }
}
