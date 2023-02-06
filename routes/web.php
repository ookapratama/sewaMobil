<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TransactionController;

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


//  Route::get('/', [LoginController::class, 'index']);

//User View
Route::get('/', [HomeController::class, 'index']);
Route::get('/aboutus', [AboutUsController::class, 'index']);
Route::get('/katalog', [ArmadaController::class, 'index']);
Route::get('/testimoni', [TestimoniController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);

Route::get('/checkout', function () {
    return view('/checkout', [
        "title" => "Checkout",
    ]);
});

Route::get('/payment', function () {
    return view('/payment', [
        "title" => "Payment",
    ]);
});

Route::get('/finishorder', function () {
    return view('/finish_order', [
        "title" => "Order Complete",
    ]);
});

Route::get('/user-transaction', function () {
    return view('/useraccount_transaction', [
        "title" => "User Profile | Transaction",
    ]);
});

Route::get('/user-invoice', function () {
    return view('/useraccount_invoice', [
        "title" => "User Profile | Invoice",
    ]);
});

Route::get('/user-profile', function () {
    return view('/useraccount_profile', [
        "title" => "User Profile",
    ]);
});

Route::get('/add-testimoni', function () {
    return view('/add_testimoni', [
        "title" => "Add Testimoni",
    ]);
});

Route::get('/dashboard', function () {
return view('/admin/dashboard', [
    "title" => "Dashboard",
]);
});

// Admin
// Route::prefix('admin')
//         // ->middleware('auth')
//         ->group(function(){
//             Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin-dashboard');
//             // Route::resource('/department', DepartmentController::class);


//         }
//     );

Route::get('/users', [UserController::class, 'index']);
// Route::get('/users', function () {
//     return view('/admin/users', [
//     "title" => "Users"
//     ]);
// });

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');

Route::get('/transaction-detail', function () {
    return view('/admin/transaction_id', [
        "title" => "Transaction Detail",
    ]);
});

Route::get('/cars', [ArmadaController::class, 'indexCars'])->name('cars');


Route::get('/driver', [DriverController::class, 'index']);

// Route::get('/driver', function () {
//     return view('/admin/driver', [
//     "title" => "Driver"
//     ]);
// });

Route::get('/review', [TestimoniController::class, 'indextestimoni']);
// Route::get('/review', function () {
//     return view('/admin/review', [
//     "title" => "Testimoni"
//     ]);
// });

Route::get('/setting', function () {
    return view('/admin/setting', [
        "title" => "About Us",
    ]);
});

Route::get('/berkas', function () {
    return view('/admin/berkas', [
        "title" => "Berkas",
    ]);
});

Route::get('/error', function () {
    return view('/error', [
        "title" => "Error",
    ]);
});


