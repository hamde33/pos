<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\SMS;
// use App\User;
use App\Models\Sal_Models\Users_sales;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::PROFILE;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        session()->put('log', 2);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // 'account_type' => ['required', 'string'],
            // 'user_type' => ['required', 'string'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     $user = Users_sales::create([
    //         'name' => $data['name'],
    //         'phone' => $data['phone'],
    //         'password' => Hash::make($data['password']),
    //         'rate' => $data['rate'],
    //         'job' => $data['job'],
    //         // 'verfiy_code' => session()->get('code'),
    //     ]);
    //     $role = Role::where('name', $data['user_type'])->first();
    //     $user->assignRole([$role->id]);
    //     return $user;
    // }

    // protected function sendSms(Request $request)
    // {
    //     $phone = $request->phone;
    //     $user = Users_sales::where('phone', $phone)->first();

    //     if ($user) {
    //         return 1;
    //     } else {
    //         session()->put('phone', '966' . $request->phone);
    //                session()->put('code', '123456');

    //      return $phone;
    //         // $phone = '966' . $request->phone;
    //         // $DTT_SMS = new SMS("balmy2030", "As123456", 'UTF-8');
    //         // $Credits = $DTT_SMS->GetCredits();
    //         // $SenderName = $DTT_SMS->GetSenders();
    //         // $CheckUser = $DTT_SMS->CheckUserPassword();

    //         // $SmS_Msg = rand(100000, 999999);
    //         // $Mobiles = $phone;
    //         // $Originator = "BALMY";
    //         // $Send = $DTT_SMS->Send_SMS($Mobiles, $Originator, $SmS_Msg);
    //         // if ($Send['RESULT'] == 0) {
    //         //     session()->put('code', $SmS_Msg);
    //         // } else {
    //         // //     session()->put('code', '123456789254019');
    //         // }
    //         // return $phone;
    //     }

    // }
    // protected function verfiyCode(Request $request)
    // {
    //     $code = $request->code;
    //     $verfiy = session()->get('code');
    //     if ($code == $verfiy) {
    //         return $code;
    //     } else {
    //         return 1;
    //     }

    // }

    //============================================
    //    protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'mobile' => ['required', 'numeric', 'min:9', 'regex:/^[5][0-9]{8}$/', 'unique:app_users'],
    //         'password' => ['required', 'string', 'min:4'],
    //     ]);

    // }
    // protected function validatorCode(array $data)
    // {

    //     return Validator::make($data, [
    //         'verfyCode' => ['required', 'string', 'max:10', 'same:253475852'],

    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function create(array $data)
    // {
    //     return Users_sales::create([
    //         'full_name' => $data['name'],
    //         'mobile' => '966' . $data['mobile'],
    //         'password' => $data['password'],
    //     ]);
    // }

    // protected function redirectPath()
    // {
    //     if (\Auth::user()->id) {
    //         return '/';
    //     } else {
    //         return '/brands';
    //     }
    // }

    // protected function verfy(Request $request)
    // {
    //     $code = session()->get('code');
    //     if ($request->input('verfyCode') == $code) {
    //         $data = session()->get('request');
    //         $request1 = new Request($data);

    //         $this->register($request1);

    //     } else {

    //         $this->validatorCode($request->all())->validate();

    //     }

    // }

    // public function register(Request $request)
    // {
    //     // return $request;
    //     // $this->validator($request->all())->validate();
    //     // return $this->create($request->all());
    //     event(new Registered($user = $this->create($request->all())));

    //     $this->guard()->login($user);
    //     // return $this->registered($request, $user)
    //     // ? 'succes' : 'error';
    //     return $this->registered($request, $user)
    //     ? "success" : "error";

    //     // if ($response = $this->registered($request, $user)) {
    //     //     return $response;
    //     // }
    //     // return redirect($this->redirectPath());
    //     // return $request->wantsJson()
    //     // ? new Response('', 201)
    //     // : "succes";
    // }
    // public function registerV(Request $request)
    // {

    //     $this->validator($request->all())->validate();
    //     session()->put('request', $request->all());
    //     session()->put('phone', '966' . $request->input('mobile'));
    //     $phone = '966' . $request->input('mobile');
    //     $DTT_SMS = new SMS("balmy2030", "As123456", 'UTF-8');
    //     $Credits = $DTT_SMS->GetCredits();
    //     $SenderName = $DTT_SMS->GetSenders();
    //     $CheckUser = $DTT_SMS->CheckUserPassword();

    //     $SmS_Msg = rand(100000, 999999);
    //     $Mobiles = $phone;
    //     $Originator = "BALMY";
    //     $Send = $DTT_SMS->Send_SMS($Mobiles, $Originator, $SmS_Msg);
    //     if ($Send['RESULT'] == 0) {
    //         session()->put('code', $SmS_Msg);
    //     } else {
    //         session()->put('code', '123456789254019');

    //     }

    //     return "success";
    // }

    // public function resend()
    // {
    //     $Mobiles = session()->get('phone');
    //     $DTT_SMS = new SMS("balmy2030", "As123456", 'UTF-8');

    //     $Credits = $DTT_SMS->GetCredits();
    //     $SenderName = $DTT_SMS->GetSenders();
    //     $CheckUser = $DTT_SMS->CheckUserPassword();
    //     // $SmS_Msg = '123456';
    //     $SmS_Msg = rand(100000, 999999);
    //     // $Mobiles = "966541293692";
    //     $Originator = "BALMY";
    //     $Send = $DTT_SMS->Send_SMS($Mobiles, $Originator, $SmS_Msg);
    //     if ($Send['RESULT'] == 0) {
    //         session()->put('code', $SmS_Msg);
    //     } else {
    //         session()->put('code', '123456789254019');
    //     }
    //     // session()->put('code', '123456');
    //     return "success";

    // }
    // public function cleardata()
    // {
    //     session()->put('code', 'hhhhhhhhhhkljk568');
    //     return "success";

    // }
}
