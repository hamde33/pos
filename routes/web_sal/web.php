<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Sal_Models\User;
use App\Http\Controllers\Sal_Controller\OrderController;
use App\Http\Controllers\Sal_Controller\UserController;
use App\Http\Controllers\Sal_Controller\RolesController;
use App\Http\Middleware\XSSProtection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['middleware' => [XSSProtection::class]], function () {
Route::get('/', function (){
       return view('auth.login');
       });
       Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    // Route::get('/add1', function (){
    //     return view('Sal_views.Order.add1');
    //     });
    Route::get('/', [OrderController::class, 'OrderTableview']);
    Route::get('purchasesBillsTable', [OrderController::class, 'purchasesBillsTable']);
    Route::get('get-user_demand_cases', [OrderController::class, 'user_demand_cases']);
    Route::get('get-get_tablOrder', [OrderController::class, 'get_tablOrder']);
    Route::get('get-Order_status_get', [OrderController::class, 'Order_status_get']);
    Route::post('eidt-update', [OrderController::class, 'update']);
    Route::post('add-neo_leap', [OrderController::class, 'add_new_lab']);
    Route::post('add-importance', [OrderController::class, 'importance']);
    Route::get('get-Order_status', [OrderController::class, 'get_Order_status'])->name('get-Order_status');
    Route::get('get-Order_status2/{id}', [OrderController::class, 'get_Order_status2']);
    Route::get('reciept/{id}', [OrderController::class, 'recieptPrint']);
    Route::post('get-order_rate', [OrderController::class, 'get_order_rate']);
    Route::post('remove-table', [OrderController::class, 'removeTable']);
    Route::post('remove-user/{id}', [OrderController::class, 'removeuser']);
    Route::post('eidt-table', [OrderController::class, 'eidtTable']);
    Route::post('eidt-edit_order', [OrderController::class, 'edit_order']);
    Route::post('add-order_cases', [OrderController::class, 'add_order_cases'])->name('add-order_cases');
    Route::post('add-Order_status', [OrderController::class, 'addOrder_status']);
    Route::get('datatransfer', [OrderController::class, 'datatransfer']);
    Route::post('remov-user', [UserController::class, 'userRemov']);
    Route::get('get-get_user', [UserController::class, 'get_user']);
    Route::post('add-create', [UserController::class, 'create']);
    Route::post('eidt-user', [UserController::class, 'edituser']);
    Route::post('eidt-update_profile', [UserController::class, 'editupdate_profile']);
    Route::get('users', [UserController::class, 'usersview']);
    Route::get('powers', [RolesController::class, 'powersview']);
    Route::get('update_profile', [UserController::class, 'update_profile']);
    Route::post('add-store', [RolesController::class, 'store']);
    Route::post('remov-destroy', [RolesController::class, 'destroy']);
    Route::any('get-index', [RolesController::class, 'index']);
    Route::post('get-permissionsByRoleName', [RolesController::class, 'permissionsByRoleName']);
});
Route::get('/toggle-subscription/{id}', 'App\Http\Controllers\SellPosController@toggleRecurringInvoices');
Route::post('/sells/pos/get-types-of-service-details', 'App\Http\Controllers\SellPosController@getTypesOfServiceDetails');
Route::post('/sells/pos/get-types-of-service-details', 'App\Http\Controllers\SellPosController@getTypesOfServiceDetails');
Route::resource('types-of-service', 'TypesOfServiceController');

Route::get('/sells/subscriptions', 'App\Http\Controllers\SellPosController@listSubscriptions');
Route::get('/sells/duplicate/{id}', 'App\Http\Controllers\SellController@duplicateSell');
Route::get('/sells/drafts', 'App\Http\Controllers\SellController@getDrafts');
Route::get('/sells/convert-to-draft/{id}', 'App\Http\Controllers\SellPosController@convertToInvoice');
Route::get('/sells/convert-to-proforma/{id}', 'App\Http\Controllers\SellPosController@convertToProforma');
Route::post('add-addOrder', [OrderController::class, 'addOrder']);
Route::get('OrderTable', [OrderController::class, 'Ordercobletview']);
Route::get('/storage-link', function () {
    \Artisan::call("storage:link");
    return \Artisan::output();
});

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    return \Artisan::output();

});

// });
