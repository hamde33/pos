<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Rules\UserExists;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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

    protected function validateLogin(Request $request)
    {
        session()->put('log', 1);
        $this->validate($request, [
            $this->username() => ['required', 'numeric', new UserExists()],
            // 'password' => 'required|min:8',
        ], [
            'phone.required' => 'يجب ادخال رقم الهاتف',
            'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام    ',
            'phone.exists' => 'رقم الهاتف غير موجود ',
            'phone.min' => 'رقم الهاتف غير موجود ',
            'password.required' => 'يجب كتابة كلمة السر ',
            // 'password.min' => 'يجب ان تتكون كلمة السر من 8 رموز ',
        ]);
    }
    protected function guard()
    {
        return Auth::guard('web');
    }

    //  public function login(Request $request)
    // {
    //     $this->validateLogin($request);
    //     if (method_exists($this, 'hasTooManyLoginAttempts') &&
    //         $this->hasTooManyLoginAttempts($request)) {
    //         $this->fireLockoutEvent($request);
    //         return $this->sendLockoutResponse($request);
    //     }
    //     if ($this->attemptLogin($request,'web')) {
    //         return $this->sendLoginResponse($request);
    //     }
    //     if ($this->attemptLogin($request,'drivers')) {
    //         return $this->sendLoginResponse($request);
    //     }
    //     return 'ttttttttttttt';
    //     $this->incrementLoginAttempts($request);

    //     return $this->sendFailedLoginResponse($request);
    // }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    public function login(Request $request)
    {
        $phone = $request->country_code . $request->phone;
        $request->merge([
            'phone' => $phone,
        ]);

        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        if ($this->guard()->validate($this->credentials($request))) {
            // Auth::guard("web")->getLastAttempted();
            if ($this->attemptLogin($request)) {
                // \dd( $this->sendLoginResponse($request));

                return $this->sendLoginResponse($request);
            }
        } else {
            $this->incrementLoginAttempts($request);
            return back()
            // ->withInput($request->only($this->username(), 'remember'))
            ->withErrors(['active' => 'هذا المستخدم غير موجود.']);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
        ? new JsonResponse([], 204)
        : redirect()->intended($this->redirectPath());
    }

    protected function credentials(Request $request)
    {
        if (is_numeric($request->get('phone'))) {
            return ['phone' => $request->get('phone'), 'password' => $request->get('password')];
        }
        // elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        //   return ['email' => $request->get('email'), 'password'=>$request->get('password')];
        // }
        return ['phone' => $request->get('phone'), 'password' => $request->get('password')];
    }
    protected function username()
    {

        return 'phone';
    }

    public function redirectTo()
    {

        if ($this->guard()->user()->active) {
            return redirect(RouteServiceProvider::HOME);
        } else {
            return redirect(RouteServiceProvider::PROFILE);
        }

        // if (auth('driveruser')->user()) {
        //     if (auth('driveruser')->user()->active) {
        //         return redirect(RouteServiceProvider::HOME);
        //     } else {
        //         return redirect(RouteServiceProvider::PROFILE);
        //     }

        // }
    }
}

