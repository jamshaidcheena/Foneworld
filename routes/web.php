<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubMobileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('device/category/{id}', [HomeController::class, 'all_category_mbl']);
Route::get('select/device/{id}', [HomeController::class, 'select_device']);
Route::post('book/repair/{slug}', [HomeController::class, 'book_repair']);
Route::get('collections/{slug}', [HomeController::class, 'collections_repair']);
Route::post('proceed_store', [HomeController::class, 'proceed_store']);
Route::post('proceed_store_post_pack', [HomeController::class, 'proceed_store_post_pack']);
Route::get('checkout', [HomeController::class, 'checkout']);
Route::post('booking', [HomeController::class, 'booking']);
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::group(['prefix'=>'super_admin','middleware'=>'admin_middleware'],function(){

    Route::get('/', [AdminController::class, 'adminindex']);


    Route::get('add/devices', [DeviceController::class, 'add_devices']);
    Route::post('submit/devices', [DeviceController::class, 'submit_devices']);
    Route::get('edit/devices', [DeviceController::class, 'edit_devices']);
    Route::post('update/devices', [DeviceController::class, 'update_devices']);
    Route::get('delete/devices', [DeviceController::class, 'delete_devices']);
    Route::get('view/devices', [DeviceController::class, 'view_devices']);

    Route::get('add/mobile', [MobileController::class, 'add_mobile']);
    Route::post('submit/mobile', [MobileController::class, 'submit_mobile']);
    Route::get('edit/mobile/{id}', [MobileController::class, 'edit_mobile']);
    Route::post('update/mobile/{id}', [MobileController::class, 'update_mobile']);
    Route::get('delete/mobile/{id}', [MobileController::class, 'delete_mobile']);
    Route::get('view/mobile', [MobileController::class, 'view_mobile']);

    Route::get('add/sub/mobile', [SubMobileController::class, 'add_sub_mobile']);
    Route::post('submit/sub/mobile', [SubMobileController::class, 'submit_sub_mobile']);
    Route::get('edit/sub/mobile/{id}', [SubMobileController::class, 'edit_sub_mobile']);
    Route::post('update/sub/mobile/{id}', [SubMobileController::class, 'update_sub_mobile']);
    Route::get('delete/sub/mobile/{id}', [SubMobileController::class, 'delete_sub_mobile']);
    Route::get('view/sub/mobile', [SubMobileController::class, 'view_sub_mobile']);


    Route::get('add/store', [ProductController::class, 'add_store']);
    Route::post('submit/store', [ProductController::class, 'submit_store']);
    Route::get('edit/store/{id}', [ProductController::class, 'edit_store']);
    Route::post('update/store/{id}', [ProductController::class, 'update_store']);
    Route::get('delete/store/{id}', [ProductController::class, 'delete_store']);
    Route::get('view/store', [ProductController::class, 'view_store']);


    Route::get('view/bookings', [ProductController::class, 'view_bookings']);
    Route::get('view/booking/detail/{id}', [ProductController::class, 'view_bookings_details']);
    Route::get('delete/booking/{id}', [ProductController::class, 'deleted_bookings']);
    
    Route::get('user/manage/role', [ProductController::class, 'user_role']);
    Route::post('add_user_permission', [ProductController::class, 'add_user_permission']);
    Route::post('edit_user_permission', [ProductController::class, 'edit_user_permission']);
    Route::get('manage_user_role_delete/{id}', [ProductController::class, 'manage_user_role_delete']);

    Route::get('inactivate_user/{id}', [ProductController::class, 'inactivate_user']);
    Route::get('activate_user/{id}', [ProductController::class, 'activate_user']);
    
    Route::get('user/settings', [ProductController::class, 'settings']);
    Route::post('change-password', [ProductController::class, 'change_password']);
    

    

});




Route::get('admin/register', [LoginController::class, 'register']);
Route::post('admin/register/submit', [LoginController::class, 'register_submit']);
Route::get('admin_login', [LoginController::class, 'login']);
Route::post('admin_signin', [LoginController::class, 'signin']);
Route::get('forgot/password', [LoginController::class, 'forgot_password']);
Route::post('forgot/password/submit', [LoginController::class, 'forgot_password_submit']);
Route::get('admin_logout', [LoginController::class, 'logout']);
require __DIR__.'/auth.php';
