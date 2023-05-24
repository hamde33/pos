<?php

namespace App\Http\Controllers\Sal_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use stdClass;
use App\CPU\ImageManager;

use App\Models\Sal_Models\Order;
use App\Models\Sal_Models\Order_sales;
use Illuminate\Support\Facades\Hash;
use App\Models\Sal_Models\Users_sales;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get_user(Request $request)
    {
        $Ordersview = Users_sales::query();


        if (isset($request->name_sersh)) {
            $Ordersview->where('name', 'like', '%' . $request->name_sersh . '%');
        }

        // if ($request->has('name')) {
        //     $Ordersview->where('name',$request->name );

        // }
        if (isset($request->date_from) && isset($request->date_to)) {
            $Ordersview->whereBetween('created_at', [$request->date_from . " 00:00:00", $request->date_to . " 23:59:59"]);
        }
        $Ordersview = $Ordersview->orderBy('id', 'DESC');
        $empcount = $Ordersview->count();

        $Ordersview = $Ordersview->offset($request->offset)
            ->limit($request->limit)
            // ->whereDate('created_at', '=', date('Y-m-d'))
            // ->parse($Ordersview['created_at'])->format('Y-M-d')
            ->get();

        $get_tablOrder = new stdClass();
        $get_tablOrder->total = $empcount;
        $get_tablOrder->totalNotFiltered = $get_tablOrder->total;
        $get_tablOrder->rows = $Ordersview;

        return response(json_encode($get_tablOrder), 200)->header('Content-Type', 'application/json');
    }
    public function usersview()
    {

        // $user = Users_sales::all();
        $rolesUser = Users_sales::take(1)->first();
        // $user = Order::where('link')->first();

        $user = Users_sales::all();
        // return $user;
        // var_dump(json_decode($user));
        // var_dump(json_decode($user, true));
        // return $explode_id;
        // $explode_id = array_map('access', explode(',', $request->access));
        return view('Sal_views.User.users', compact('rolesUser','user'));
    }
    public function update_profile()
    {
        $user = Users_sales::all();

        // $user = Users_sales::all();
        return view('Sal_views.User.update_profile', compact('user'));
    }

    protected function edituser(Request $request)
    {
        // return $request;
        $user = Users_sales::find($request->id);

        $phone = $request->country_code . $request->phone;
        $request->merge([
            'phone' => $phone,
        ]);
    //     $this->validate($request, [
    //         'phone' => ['required', 'numeric','unique:users_sales'],

    //     ], [

    //         'phone.required' => 'يجب ادخال رقم الهاتف',
    //         'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام    ',
    //         'phone.unique' => 'رقم الهاتف  موجود من قبل ',


    //     ]
    // );

        if ($request->has('password') && !empty($request->password)) {
            $user->password = \Hash::make($request->password);
        }


// return $request;
        $user->active = isset($request->active[0]) ? 1 : 0;
        $user->phone = $request->phone;
        $user->job = $request->job;
        $user->name = $request->name;
        $user->access = json_encode($request['access']);
        $user->updated_by = Auth::user()->id;

        $user->rate = $request->rate;
        $user->save();
        $user->syncRoles($request->roles);

        return back();
    }

    protected function editupdate_profile(Request $request)
    {



        // $phone = $request->country_code . $request->phone;
        // $request->merge([
        //     'phone' => $phone,
        // ]);


        $user = Users_sales::find($request->id);
        if (($request->file('personal_picture'))) {
            $user->personal_picture = ImageManager::update('User_sal/User/personal_picture/', $user->personal_picture, 'png', $request->file('personal_picture'));
        }
        // ImageManager
        if ($request->has('password') && !empty($request->password)) {
            $user->password = \Hash::make($request->password);
        }
        $user->active = isset($request->active[0]) ? 1 : 0;

        // $user->active = $request->active;
        $user->phone = $request->phone;
        $user->job = $request->job;
        $user->name = $request->name;

        $user->rate = $request->rate;
        $user->updated_by = Auth::user()->id;
        $user->save();

        Toastr::success('تم تعديل مسخدم  بنجاح');

        return redirect()->back();
    }
    public function userRemov(Request $request)
    {
        logger($request);
        $link = $request->input('link');
        $id = $request->input('id');
        $Departments = Order_sales::where('user_link', $link)->first();
        // return $Departments;

        if ($Departments) {
            return 0;
        } else {
            // return $id;
            $user = Users_sales::find($id);
            $user->delete_by = Auth::user()->id;
            $user->save();
            $removed = Users_sales::find($id)->delete();


            // return $removed;
        }



        // DB::table("users")->where('id', $request->id)->delete();

        // Toastr::success(' تم الحذف بنجاح!');
        return back();
    }
    protected function create(Request $request)
    {

        $phone = $request->country_code . $request->phone;
        $request->merge([
            'phone' => $phone,
        ]);
        $this->validate($request, [
            'phone' => ['required', 'numeric','unique:users_sales'],
            'password' => ['required'],

        ], [

            'password.required' => 'يجب ادخال  كلمة السر',
            'phone.required' => 'يجب ادخال رقم الهاتف',
            'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام    ',
            'phone.unique' => 'رقم الهاتف  موجود من قبل ',


        ]
    );
        //    $valid=\Validator::make($request->all(), [
        //         'phone' => ['required', 'numeric', 'unique:users'],
        //         'com_register_number' => ['required', 'unique:users'],
        //     ], [
        //         'phone.required' => 'يجب ادخال رقم الهاتف',
        //         'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام ',
        //         'phone.min' => 'رقم الهاتف 9 ارقام ',
        //         'phone.unique' => 'رقم الهاتف  موجود من قبل ',

        //     ]
        //     );
        //     if ($valid->fails()) {
        // return back()->withErrors($valid)->withInput($request->all());

        $users = Users_sales::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            'rate' => $request['rate'],
            'job' => $request['job'],
            'access' => json_encode($request['access']),
            'active' => isset($request->active[0]) ? 1 : 0,
            'link' => Str::uuid('link'),
            'created_by' =>  Auth::user()->id,
            // {{ Request::root() }}/OrderTable?tokn=
            // 'verfiy_code' => session()->get('code'),
        ]);
        // }
        if (($request->file('personal_picture'))) {
            $users['personal_picture'] = ImageManager::upload('User_sal/User/personal_picture/', 'png', $request->file('personal_picture'));
        }
        $users->assignRole($request->input('roles'));

        return back();
    }
}
