<?php

namespace App\Http\Controllers\Sal_Controller;

use App\Http\Controllers\Controller;
use App\Models\Sal_Models\Communicate_sales;
use App\Models\Sal_Models\Importance_sales;
use Illuminate\Http\Request;
use stdClass;
use Illuminate\Support\Facades\Auth;
// use App\Models\Sal_Models\Order;
use App\Models\Sal_Models\Order_sales;
// use App\Models\Sal_Models\Order_cases;
use App\Models\Sal_Models\Status_sales;
use App\Models\Sal_Models\Order_answer_sales;
use App\Models\Sal_Models\Users_sales;
// use App\Models\Sal_Models\Orders_filter;
use App\Models\Sal_Models\Orders_status_sales;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\DB;
use IntlChar;
use Spatie\Permission\Models\Role;


class OrderController extends Controller
{




    protected function edit_order(Request $request)
    {

        $phone = $request->country_code . $request->phone;
        $request->merge([
            'phone' => $phone,
        ]);
        //     $this->validate($request, [
        //         'phone' => ['required','numeric', 'unique:order_sales'],

        //     ], [

        //         'phone.required' => 'يجب ادخال رقم الهاتف',
        //         'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام    ',
        //         'phone.unique' => 'رقم الهاتف  موجود من قبل ',


        //     ]
        // );
        $Order = Order_sales::find($request->id);



        $Order->active = isset($request->active[0]) ? 1 : 0;

        $Order->work_active = $request->work_active;
        // $Order->contact_id = $request->contact_id;
        // $Order->order_value = $request->order_value;
        $Order->user_link = $request->user_link;
        $Order->name = $request->name;
        $Order->phone = $request->phone;
        $Order->not = $request->not;
        $Order->updated_by = Auth::user()->id;

        $Order->requir =  implode(',', (array) $request['requir']);
        $Order->save();

        // $role = Role::where('name', $request['user_type'])->first();
        // $user->assignRole([$role->id]);
        return back();
    }
    public function get_order_rate(Request $request)
    {

        $Order = Order_sales::find($request->id);

        // $res = 33;
        $Order->pay = false;

        $Order->pay = isset($request->pay[1]) ? 0 : 1;
        // $Order->order_rate = $request->order_rate;

        $Order->save();
        // $Order = NULL;

        // $role = Role::where('name', $request['user_type'])->first();
        // $user->assignRole([$role->id]);
        return back();
    }
    public function add_new_lab(Request $request)
    {

        $Order = Order_sales::find($request->id);

        // $res = 33;
        // $Order->order_rate = false;

        $Order->neo_leap = $request->neo_leap;
        // $Order->order_rate = $request->order_rate;

        $Order->save();
        // $Order = NULL;

        // $role = Role::where('name', $request['user_type'])->first();
        // $user->assignRole([$role->id]);
        return back();
    }

    public function addOrder_status(Request $request)
    {

        // $dr = Order::create($request->all());
        $dr = Order_answer_sales::create([
            'user' => $request['user'],
            'answer' => $request['answer'],
            'order_status_id' => $request['order_status_id'],
            'created_by' =>  Auth::user()->id,

            // 'updated_at2' => Carbon::now()->format('Y-m-d H:i:s'),


            // 'verfiy_code' => session()->get('code'),
        ]);

        // $this->validate($request, [
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'Employer' => 'required',
        //     'Salary' => 'required',
        //     'salary_deposit_bank' => 'required',
        //     'Commitments' => 'required',
        //     'old' => 'required',
        // ]);
        #this
        // return $this->get_Order_status($request->order_status_id);
        if ($dr) {
            Toastr::success('  فشل في الاضافة!');
            $success = true;
            $user = $dr->user;
            // return $success;
            return back()->with('success_add', $success)->with('added_name', $user);
        } else {

            Toastr::error('تم اضافة  ');
        }
        return back();
    }
    public function addOrder(Request $request)
    {

        // return $request;
        // return $request;
        // $dr = Order::create($request->all());
        // $dr = $request->all();
        $phone = $request->country_code . $request->phone;
        $request->merge([
            'phone' => $phone,
        ]);
        $this->validate(
            $request,
            [
                'phone' => ['required', 'numeric', 'unique:order_sales'],

            ],
            [
                'phone.required' => 'يجب ادخال رقم الهاتف',
                'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام    ',
                'phone.unique' => 'رقم الهاتف  موجود من قبل ',


            ]

        );
        // return $request;

        $ff = $request->user_link;
        if ($request->user_link == null || $request->user_link == "0") {

            $link = Users_sales::where('access', '1')->first();
            $ff = $link->link;
        }

        // $id_Users_sales = $request->user_link;
        // if ($request->user_link == "0") {
        //     // $id = Users_sales::where('access', '"1"')->first();
        //     $id = Users_sales::where('access', '"1"')->first();
        //     $id_Users_sales = $id->id;
        //     // $input['created_by'] = Auth::user()->id;

        //     // return $id_Users_sales;
        // }
        // else
        // {
        // $id_Users_sales = Order_sales::query();
        // $id_Users_sales  = $id_Users_sales
        // ->join('users_sales', 'order_sales.user_link', 'users_sales.link')
        // // ->where('users_sales.id')
        // ->select('users_sales.id')
        // ->get();
        // $id_Users_sales = $Orderview->id;
        // return $Orderview;


        // $user_namereq = $request->user_name;

        // else
        // {
        //     $link = Auth::user()->link;
        //     $ff = $link->link;
        // }
        // return $link;
        if ($request->work_active == "2") {
            // if($request->work_active)
            // {
            $this->validate(
                $request,
                [
                    'work_active1' => ['required'],

                ],
                [
                    'work_active1.required' => 'يجب اختيار  نشاطات المؤسسة/الشركة ',



                ]

            );

            $dr = Order_sales::create([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'user_link' => $ff,
                'import_id' => '2',
                'not' => $request['not'],
                'work_active' => $request['work_active1'],
                'contact_id' => "10",
                'active' => isset($request->active[0]) ? 1 : 0,
                'requir' => implode(',', (array) $request['requir']),
                'created_by' =>  $ff,

                // 'verfiy_code' => session()->get('code'),
            ]);
        } else {
            $dr = Order_sales::create([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'user_link' => $ff,
                'import_id' => '2',
                'not' => $request['not'],
                'active' => isset($request->active[0]) ? 1 : 0,
                'work_active' => $request['work_active'],
                'contact_id' => "10",
                'requir' => implode(',', (array) $request['requir']),
                'created_by' =>  $ff,

            ]);
        }
        // return $dr;
        // if ($request->user_name == "0") {


        // }
        // else
        // {
        if ($request->user_link == "0") {

            $dr2 =  Orders_status_sales::create([
                'status_sales_id' => "1",
                'user_link' => $ff,
                'order_id' => $dr->id,
                'created_by' =>  $ff,

            ]);
        } else {
            $dr2 =  Orders_status_sales::create([
                'status_sales_id' => "1",
                'user_link' => $request['user_link'],
                'order_id' => $dr->id,
                'created_by' => $request['user_link'],

            ]);
        }
        // }

        // $this->validate($request, [
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'Employer' => 'required',
        //     'Salary' => 'required',
        //     'salary_deposit_bank' => 'required',
        //     'Commitments' => 'required',
        //     'old' => 'required',
        // ]);
        if ($dr || $dr2) {
            Toastr::success('فشل في الاضافة!');
            $success = true;
            $name = $dr->name;
            // return $success;
            return back()->with('success_add', $success)->with('added_name', $name);
        } else {

            Toastr::error('تم اضافة  ');
        }
        return back();
    }
    public function add_order_cases(Request $request)
    {

        // $dr = Order::create($request->all());
        // $dr = $request->all();

        // $data = $request->input('status_sales_id');

        // $dr1 = Order_sales::find($request->id);
        // $dr1->current_status = $request->status_sales_id;
        // $dr1->save();
        // return $request;
        $dr =  Orders_status_sales::create([
            'status_sales_id' => $request['status_sales_id'],
            'order_id' => $request['order_id'],
            'user_link' =>  Auth::user()->link,
            'created_by' =>  Auth::user()->id,


        ]);
        // $this->aeditorder_cases;
        // return $dr;
        $dr1 = Order_sales::find($request->id);
        $dr1->current_status = $request->status_sales_id;
        $dr1->save();
        return back();
    }

    public function Ordercobletview()
    {
        // return request()->tokn;

        $user = 0;
        if (request()->has('tokn')) {
            $user = request()->tokn;
        }

        $communicate = Communicate_sales::all();
        // $user_id = Users_sales::all();

        // $user_name = Users_sales::where('name')->get();


        return view('Sal_views.Order.ordercoblet', compact('user', 'communicate'));
    }
    // public function purchasesBillsTable()
    // {


    //     return view('Sal_views.Order.purchasesBillsTable');
    // }
    public function OrderTableview(Request $request)
    {
        // return $request;
        // if (Auth::user()->access == "1") {
        // ->ofLinks();
        if (Auth::user()->can('view-all-order')) {

            $username = Users_sales::all();
        } else {
            if (Auth::user()->access == "null") {
                $username = Order_sales::with('usersclakshin', 'ordercases22', 'importan');
                $username = $username
                    // ->ofLinks()
                    ->join('users_sales', 'order_sales.user_link', 'users_sales.link')
                    //    // ->select('order_sales.*')
                    ->where('order_sales.user_link', Auth::user()->link)
                    ->groupBy('users_sales.link')
                    ->get();
            } else {
                $username = Order_sales::with('usersclakshin', 'ordercases22', 'importan');
                $username = $username
                    ->join('users_sales', 'order_sales.user_link', 'users_sales.link')
                    ->ofLinks()
                    //    // ->select('order_sales.*')
                    //    ->where('order_sales.user_link', Auth::user()->link)
                    ->groupBy('users_sales.link')
                    ->get();
            }
        }
        // $username = Users_sales::whereIn(json_decode(Auth::user()->access));
        // $username = Users_sales::whereIn('users_sales.id',json_decode(Auth::user()->access));
        // ->whereIn('users_sales.id',[$request->access])

        // $Order_answer_sales = Order_answer_sales::all();
        $Order_answer_sales = Order_answer_sales::all();
        // $Order_answer_sales = Order_answer_sales::where('order_status_id')->get();
        $Order_id = Order_sales::all();
        $Orders_filter = Orders_status_sales::all();
        $Orders = Status_sales::all();
        $communicate = Communicate_sales::all();
        $importance = Importance_sales::all();

        //  $this->get_Order_status2($request->$order_case);

        //     $Orderview = Order::query();
        //     $Ordersview = $Orderview
        //     ->join('users', 'order.link', 'users.link')
        //     ->select('users.*','order.*')
        //     ->get();
        //     foreach ($Ordersview as $user_rate) {

        //         $user_rate->salariess_dey = (($user_rate->usersclakshin) /  ($user_rate->order_status));
        // }
        // return $user_rate;
        // $Orderview = Order::with('usersclakshin');
        // $Orderview = $Orderview->offset($request->offset)
        //    $Orderview  = DB::table('order')
        //   -> with('usersclakshin','ordercases22')
        //     ->get();

        // $Orderview = Order::with('usersclakshin','ordercases22')
        // // ->join('orders_filter',  'order.id', 'orders_filter.order_id')
        // // ->join('status','orders_filter.status_sales_id', 'status.id')

        //                 // ->where('orders_filter.','status.name')

        //                 ->get();
        //                     return $Orderview;
        // $Orderview = Order_sales::query();
        // $Orderview = $Orderview
        // ->whereIn($request->access,'users_sales.id')

        // ->join('orders_status_seles', 'order_seles.id', 'orders_status_seles.order_id')
        // ->where('orders_status_seles.status_sales_id','1')
        // // ->orderBy('orders_status_seles.status_sales_id')
        // ->get();
        // return $Orderview;
        return view('Sal_views.Order.table', compact('importance', 'username', 'communicate', 'Orders_filter', 'Orders'));
        // } else {

        // return view('User.user_demand_cases');
        // }
    }


    public function datatransfer(Request $request)
    {

        $record = DB::table('order_sales')
            //    ->latest()
            ->get();
        //    return $record;
        foreach ($record as $user_rate) {

            // $rate4 = Orders_status_sales::where('order_id',$user_rate->id)->get();
            $rate4 = DB::table('orders_status_sales')
                ->where('order_id', $user_rate->id)
                ->latest()
                ->first();


                Order_sales::where('id', $user_rate->id)->update([
                    'current_status' => $rate4->status_sales_id,
                ]);

        }

        //     $record = DB::table('order_sales')
        //     ->join('orders_status_sales', 'order_sales.id', 'orders_status_sales.order_id')
        //     ->select('orders_status_sales.status_sales_id', 'order_sales.current_status')
        //    ->latest('orders_status_sales.created_at')
        //    ->get();
        // //    return  $record;
        //         foreach ($record as $user_rate) {
        //             $user_rate->update([
        //                 'current_status' => $request->judul_buku,
        //                 'status' => $status,
        //             ]);
        //             // $user_rate->current_status = $user_rate->status_sales_id;
        //         // $user_rate->save();
        //         }

    }
    public function removeTable(Request $request)
    {
        $deleted = Users_sales::find($request->input('id'))->delete();
        // Toastr::success('تم الحذف بنجاح ');
        return back();
    }
    public function get_tablOrder(Request $request)
    {
        if (Auth::user()->can('view-all-order')) {

            $Orderview = Order_sales::with('usersclakshin', 'ordercases22', 'importan');
            logger($request);
            if (($request->has('order_cases_search'))) {
                $Orderview->where('order_sales.current_status', $request->order_cases_search);


                // ->join('orders_status_sales', 'order_sales.id', 'orders_status_sales.order_id')
                // ->where('status_sales_id', $request->order_cases_search)
                // ->select('orders_status_sales.id as id1', 'order_sales.*')
                // ->orderBy('orders_status_sales.status_sales_id');
            }


            if ($request->has('link') &&  $request->link != [null]) {
                $Orderview->join('users_sales', 'order_sales.user_link', 'users_sales.link')
                    ->whereIn('users_sales.link', $request->link)
                    ->select('order_sales.*')
                    ->orderBy('order_sales.user_link');
            }
            // if (isset($request->id_sersh)) {
            //     $Orderview->where('order_sales.id', $request->id_sersh);
            // }
            if (isset($request->search)) {

                $Orderview->where('order_sales.name', 'like', '%' . $request->search . '%')
                    ->orWhere('order_sales.id', 'like', '%' . $request->search . '%')
                    ->orWhere('order_sales.phone', 'like', '%' . $request->search . '%');
            }
            // if (isset($request->search)) {
            //     $Orderview->where('order_sales.phone', $request->id_sersh);
            // }
            if (isset($request->order_rate_search)) {
                $Orderview->where('order_sales.pay', $request->order_rate_search);
            }
            if ($request->neo_leap_search == "0") {
                $Orderview
                    ->whereNull('order_sales.neo_leap')
                    ->orWhere('order_sales.neo_leap', '0');
            }
            if ($request->has('importance_search') &&  $request->importance_search != [null]) {
                $Orderview

                    ->whereIn('order_sales.import_id',  $request->importance_search);
            }

            if ($request->neo_leap_search == "1") {
                $Orderview->where('order_sales.neo_leap', '>=', $request->neo_leap_search);
            }

            // else
            // {
            //     $Orderview->where('order_sales.neo_leap',$request->neo_leap);
            // }

            if (isset($request->date_from) && isset($request->date_to)) {
                $Orderview->whereBetween('order_sales.created_at', [$request->date_from . " 00:00:00", $request->date_to . " 23:59:59"]);
            }

            // if (Auth::user()->access == "1") {
            $empcount = $Orderview->count();
            $Orderview = $Orderview->orderBy('order_sales.id', 'DESC');
            if (isset($request->offset) && isset($request->limit)) {
                $Orderview = $Orderview->offset($request->offset)
                    ->limit($request->limit)

                    ->get();
            } else {

                $Orderview = $Orderview
                    ->get();
            }

            $get_tablOrderData = new stdClass();
            $get_tablOrderData->total = $empcount;
            $get_tablOrderData->totalNotFiltered = $get_tablOrderData->total;
            $get_tablOrderData->rows = $Orderview;

            return response(json_encode($get_tablOrderData), 200)->header('Content-Type', 'application/json');
        } else {


            $Orderview2 = Order_sales::with('usersclakshin', 'ordercases22', 'importan');
            logger($request);
            if (($request->has('order_cases_search'))) {
                $Orderview2
                    ->ofLinks()
                    ->where('order_sales.current_status', $request->order_cases_search);

                    // ->join('orders_status_sales', 'order_sales.id', 'orders_status_sales.order_id')
                    // ->where('orders_status_sales.status_sales_id', $request->order_cases_search)
                    // ->select('orders_status_sales.id as id1', 'order_sales.*');
                // ->orderBy('orders_status_sales.status_sales_id');
                // ->latest();
            }
            // if (Auth::user()->can('filteringuser-representative-orders')) {

            if ($request->has('link') &&  $request->link != [null]) {
                $Orderview2
                    ->ofLinks()
                    // ->join('users_sales', 'order_sales.user_link', 'users_sales.link')
                    ->select('order_sales.*')
                    ->whereIn('users_sales.link', $request->link)
                    ->orderBy('order_sales.user_link');

                // ->orderBy('order_sales.user_link');
                // }
            }
            // if (isset($request->id_sersh)) {
            //     $Orderview2->where('order_sales.id', $request->id_sersh)
            //     ->orderBy(Auth::user()->id);

            // }
            if ($request->has('importance_search') &&  $request->importance_search != [null]) {
                $Orderview2
                    ->ofLinks()
                    ->whereIn('order_sales.import_id', $request->importance_search);
            }
            if (isset($request->search)) {
                $Orderview2
                    ->ofLinks()
                    ->where('order_sales.name', 'like', '%' . $request->search . '%')
                    ->orWhere('order_sales.id', 'like', '%' . $request->search . '%')
                    // ->whereIn('users_sales.id',json_decode(Auth::user()->access))
                    // ->orWhere('order_sales.user_link',Auth::user()->link)
                    ->orWhere('order_sales.phone', 'like', '%' . $request->search . '%')
                    ->orderBy('users_sales.link');

                // ->groupBy('order_sales.id');

            }
            if (isset($request->order_rate_search)) {
                $Orderview2
                    ->ofLinks()
                    ->where('order_sales.pay', $request->order_rate_search);
            }

            if (isset($request->date_from) && isset($request->date_to)) {
                $Orderview2
                    ->ofLinks()
                    ->whereBetween('order_sales.created_at', [$request->date_from . " 00:00:00", $request->date_to . " 23:59:59"]);
            }

            if ($request->neo_leap_search == "0") {
                $Orderview2
                    ->ofLinks()
                    ->whereNull('order_sales.neo_leap')
                    ->orWhere('order_sales.neo_leap', '0');
            }

            if ($request->neo_leap_search == "1") {
                $Orderview2
                    ->ofLinks()
                    ->where('order_sales.neo_leap', '>=', $request->neo_leap_search);
            }

            // if (Auth::user()->access == "1") {
            // logger(Auth::user()->access);
            // if ($request->access  == $request->id) {
            $Orderview2 = $Orderview2->orderBy('order_sales.id', 'DESC');
            if (Auth::user()->access !== "null") {
                if (isset($request->offset) && isset($request->limit)) {
                    $Orderview2 = $Orderview2->offset($request->offset)
                        ->limit($request->limit)
                        ->join('users_sales', 'order_sales.user_link', 'users_sales.link')
                        ->select('order_sales.*')

                        // ->whereIn('users_sales.id',[$request->access])
                        // ->whereIn('users_sales.id',json_decode(Auth::user()->access))

                        // ->orWhere('order_sales.user_link',Auth::user()->link)
                        ->ofLinks()

                        // ->orderBy('order_sales.id')

                        // ->whereIn('order_sales.user_link',)
                        ->get();
                } else {
                    $Orderview2 = $Orderview2
                        ->where('order_sales.user_link', Auth::user()->link)
                        ->get();
                }
                // }

            } else {

                $Orderview2 = $Orderview2
                    ->where('order_sales.user_link', Auth::user()->link)
                    ->get();
            }



            $empcount2 = $Orderview2->count();
            $get_tablOrderData2 = new stdClass();
            $get_tablOrderData2->total = $empcount2;
            $get_tablOrderData2->totalNotFiltered = $get_tablOrderData2->total;
            $get_tablOrderData2->rows = $Orderview2;
        }
        return response(json_encode($get_tablOrderData2), 200)->header('Content-Type', 'application/json');
    }

    public function get_Order_status(Request $request)
    {

        // $show_table_result = DB::table('order_status')
        // $show_table_result = Order_answer_sales::find($id);
        // ->where('order_status_id')
        // $show_table_result = Order_answer_sales::where('order_status_id', $id)->get();
        $assetop = Order_answer_sales::where('order_status_id', $request->assetId)
            ->offset($request->offset)
            ->limit($request->limit)
            ->get();
        $assetopData = new stdClass();
        $assetopData->total = Order_answer_sales::where('order_status_id', $request->assetId)
            ->count();
        $assetopData->totalNotFiltered = $assetopData->total;
        $assetopData->rows = $assetop;
        // $prodsData->columns = $prods;
        return response(json_encode($assetopData), 200)->header('Content-Type', 'application/json');

        // ->join('order_status','order_status.order_status_id','order.id')
        // ->find($id);
        // return view('Order.table', compact('username','Order_answer_sales','Order_id'));

        // return response()->json($show_table_result);
    }
    public function get_Order_status2($id)
    {
        // $orderData = Orders_filter::with('ordercases');


        // $driver = Orders_filter::where('order_id', $orderData->id)->get();
        // $driver = Orders_filter::where('order_id', $orderData->id)->get();
        $orderData = Orders_status_sales::where('order_id', $id)->get();
        $orderData1 = Orders_status_sales::where('order_id', $id)->latest()->first();
        if ($orderData1) {

            $cases = Status_sales::where('id', '>', $orderData1->status_sales_id)->get();
        } else {
            $cases = Status_sales::where('id', '>', $orderData1[0]->status_sales_id)->get();
        }
        // $eidetorder = Order_cases::where('id','=',$orderData1[0]->status_sales_id)->get();

        // if (isset($cases)) {
        // if($cases == 4)
        // {
        //             $cases = Order_cases::where('id','>', $orderData[0]->status_sales_id)->get();

        // }
        //     # code...
        // }
        // $cases = Order_cases::query();

        logger($cases);
        // $status = OrderStatus::whereIn('id', $Sdata)->pluck('ar_name', 'id')->all();
        // $cases = Order_cases::whereIn('id',$orderData->status_sales_id)->get();
        // $status = Order_cases::whereIn('id',  1)->pluck('name', 'id')->all();

        // $orderData = Orders_filter::where('order_id', $id)->get();
        // $Sdata = $driver[1]->status_sales_id;
        // $Sdata = [$driver->status_sales_id, ($driver->status_sales_id + 1)];

        // $orderData = Order::where('id', $id)->first();
        // $status = Order_cases::whereIn('id', $Sdata)->pluck('name', 'id')->all();

        // $status = [0];
        // $rrr = [0];
        $rrr = [
            'orderData' => $orderData,
            'cases' => $cases,
        ];

        // $order_case = Order_cases::where('id', $orderData->status_id)->pluck('name', 'id')->all();

        // return response()->json(['orderData' => 'cases', 'message' => $ddd->all()], 200);
        // return redirect()->back()->with('success', 'Successfully Stored');

        return response()->json($rrr);
    }
    public function recieptPrint($id)
    {
        $recieptPrint = Order_answer_sales::where('order_status_id', $id)->get();
        $Order_Print = Order_sales::where('id', $id)->get();

        // $date = Carbon::now();
        // $recieptPrint = Orders_filter::where('order_id',$id)->get();

        return view('Sal_views.Print.reciept', compact('recieptPrint', 'Order_Print'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($request->id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));
        return back()->with('success', 'Role updated successfully');
    }


    public function Order_status_get(Request $request)
    {
        $Ordersview = Order_answer_sales::query();

        if (isset($request->date_from) && isset($request->date_to)) {
            $Ordersview->whereBetween('created_at', [$request->date_from . " 00:00:00", $request->date_to . " 23:59:59"]);
            //    ->orderBy('id', 'DESC')
            // ->get();
        }

        $empcount = $Ordersview->count();
        $Ordersview = $Ordersview->offset($request->offset)
            ->limit($request->limit)
            ->latest('order_status_id')->first()
            // ->select('Order.*')
            ->get();

        logger($empcount);
        $get_tablOrder = new stdClass();
        $get_tablOrder->total = $empcount;
        $get_tablOrder->totalNotFiltered = $get_tablOrder->total;
        $get_tablOrder->rows = $Ordersview;

        return response(json_encode($get_tablOrder), 200)->header('Content-Type', 'application/json');
    }
    public function eidtTable(Request $request)
    {

        $Order = Order_sales::find($request->id);
        $Order->order_value = $request->order_value;
        $Order->save();
        return back();
    }
    public function importance(Request $request)
    {

        $Order = Order_sales::find($request->id);
        $Order->import_id = $request->import_id;
        $Order->save();
        return back();
    }
      
}
