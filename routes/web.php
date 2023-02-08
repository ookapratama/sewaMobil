<?php

use App\Http\Controllers\SignupController;
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
Route::get('/katalog', [ArmadaController::class, 'index'])->name('katalog.index');
Route::get('/testimoni', [TestimoniController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.cek');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store'])->name('sign.store');

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


Route::get('/add-testimoni', [TestimoniController::class, 'testi_user'])->name('testi');
Route::post('/add-testimoni',[TestimoniController::class, 'testi_user_add'])->name('testi.user');



// Admin
// Route::prefix('admin')
//         // ->middleware('auth')
//         ->group(function(){
//             Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin-dashboard');
//             // Route::resource('/department', DepartmentController::class);


//         }
//     );

// Route::get('/users', function () {
//     return view('/admin/users', [
//     "title" => "Users"
//     ]);
// });

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');

Route::get('/transaction-detail', function () {
    return view('/admin/transaction_id', [
        "title" => "Transaction Detail",
    ]);
});




// Route::get('/driver', [DriverController::class, 'index']);

// Route::get('/driver', function () {
//     return view('/admin/driver', [
//     "title" => "Driver"
//     ]);
// });

// Route::get('/review', [TestimoniController::class, 'indextestimoni'])->name('testi.index');
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


// Admin
Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => '/transaksi'], function () {
        Route::get('/', [TransactionController::class, 'index'])->name('transaksi.index');
        Route::post('/store', [TransactionController::class, 'store'])->name('transaksi.store');
        Route::get('/edit/{id}', [TransactionController::class, 'edit'])->name('transaksi.edit');
        Route::put('/update', [TransactionController::class, 'update'])->name('transaksi.update');
        Route::delete('/destroy/{id}', [TransactionController::class, 'destroy'])->name('transaksi.destroy');

    }
    );


    Route::group(['prefix' => '/testi'], function () {
        Route::get('/', [TestimoniController::class, 'indextestimoni'])->name('testi.index');
        Route::get('/edit/{id}', [TestimoniController::class, 'edit'])->name('testi.edit');
        Route::put('/update', [TestimoniController::class, 'update'])->name('testi.update');
        Route::delete('/destroy/{id}', [TestimoniController::class, 'destroy'])->name('testi.destroy');

    }
    );

    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/update', [UserController::class, 'update'])->name('user.update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    }
    );

    Route::group(['prefix' => '/cars'], function () {
        Route::get('/', [ArmadaController::class, 'indexCars'])->name('cars.index');
        Route::post('/store', [ArmadaController::class, 'store'])->name('cars.store');
        Route::get('/edit/{id}', [ArmadaController::class, 'edit'])->name('cars.edit');
        Route::put('/update', [ArmadaController::class, 'update'])->name('cars.update');
        Route::delete('/destroy/{id}', [ArmadaController::class, 'destroy'])->name('cars.destroy');

    }
    );

    Route::group(['prefix' => '/driver'], function () {
        Route::get('/', [DriverController::class, 'index'])->name('driver.index');
        Route::post('/store', [DriverController::class, 'store'])->name('driver.store');
        Route::get('/edit/{id}', [DriverController::class, 'edit'])->name('driver.edit');
        Route::put('/update', [DriverController::class, 'update'])->name('driver.update');
        Route::delete('/destroy/{id}', [DriverController::class, 'destroy'])->name('driver.destroy');

    }
    );

});