<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// use App\Http\Controller\KantorController;
// use App\Http\Controller\UnitController;
// use App\Http\Controller\JabatanController;
use App\Http\Controllers\DivisiController;
// use App\Http\Controller\KategoriController;
// use App\Http\Controller\DataAdministratorController;
// use App\Http\Controller\StatusController;
// use App\Http\Controller\LabelsController;
use App\Http\Controller\CustomerController;
use App\Http\Controller\DepartmentController;
use App\Http\Controller\PriorityController;
// use App\Http\Controller\TicketingController;
use App\Http\Controller\AdminController;
use App\Http\Controller\UserTicketingController;
use App\Http\Controller\ProjectCustomerController;
use App\Http\Controller\JenisrequestController;

// use App\Http\Controller\FrontendController;
// use App\Http\Controllers\TicketingController\detail;
// use App\Http\Controller\ProfileController;
// use App\Http\Controller\SantriController;



// Route::put('/ticketing/{id}', [TicketingController::class, 'store']);

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


Route::get('/', function () {
    return view('/auth/login');
});
Route::get('/admin', function () {
    return view('layouts.admin');
});
// Route::get('/front', function () {
//     return view('layouts.front');
// });
// Route::get('/addchat1', function () {
//     return view('layouts.addchat1');
// });
Route::get('/reply', function () {
    return view('layouts.reply');
});
Route::get('/all-user', function () {
    return view('layouts.all-user');
});
Route::get('/admin2', function () {
    return view('layouts.admin2');
});
Route::get('/db', function () {
    return view('layouts.db');
});
Route::get('/dashboard2', function () {
    return view('layouts.dashboard2');
});
Route::get('/admin3', function () {
    return view('layouts.admin3');
});




Auth::routes();
Route::group(['middleware' => ['auth', 'isAdmin']], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    });
    // Route::get('/all-user',[App\Http\Controllers\UserController::class,'AllUser'])->name('alluser');
    // Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    // Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    // Route::get('/profile', function () {
    //     return view('layouts.profile');
    // });
    // Route::resource('/all-user',UserController::class);
    Route::resource('/jabatan',JabatanController::class);
    Route::resource('/divisi',DivisiController::class);
    Route::resource('/kategori',KategoriController::class);
    Route::resource('/status','StatusController');
    Route::resource('/customer','CustomerController');
    Route::resource('/department','DepartmentController');
    Route::resource('/priority','PriorityController');
    Route::resource('/adminticketing','AdminController');
    Route::resource('/userticketing','UserTicketingController');
    Route::resource('/ticketing',TicketingController::class);
    // Route::resource('/detail/{ticketing}','TicketingController@detail')->name('ticketing.detail');
    Route::get('/ticketing/{id}/store_pengaturan', 'TicketingController@store_pengaturan')->name('ticketing.store_pengaturan');
    Route::get('/ticketing/{id}/dtl', 'TicketingController@dtl')->name('ticketing.dtl');
    Route::post('ticketing/{id}update_pengaturan','TicketingController@update_pengaturan')->name('ticketing.dtl');
    // Route::get('/dtl/{id}', [TicketingController::class, 'dtl'])->name("dtl");
    // Route::get('ticketing/{ticketing}/dtl', 'TicketingController@dtl')->name('ticketing.dtl');
    Route::resource('/projectcustomer','ProjectCustomerController');
    Route::resource('/jenisrequest','JenisrequestController');
    Route::resource('/detail',DetailController::class);

    Route::resource('/profile',ProfileController::class);

    Route::get('/formulir', 'PegawaiController@formulir');
    Route::post('/formulir/proses', 'PegawaiController@proses');

    Route::get('detaildata', 'DetailDataController@detaildata');
    Route::post('detaildata/prosesdetail', 'DetailDataController@prosesdetail');
   
    Route::get('/input', 'DetailTicketingController@input');
    Route::post('/proses', 'DetailTicketingController@proses');
    Route::get('/tampil', 'DetailTicketingController@tampil');


});
   
    // Route::get('/create_detail/{id}', 'TicketingController@create_detail')->name('ticketing.create_detail');
    // Route::get('ticketing/{var}/detail', 'TicketingController@detail')->name('ticketing.detail');
    
    Route::get('detaildata', 'TicketingController@detaildata')->name('ticketing.detaildata');
    Route::post('/store_detail', 'TicketingController@store_detail')->name('ticketing.store_detail');
    Route::get('/detail_show', 'TicketingController@detail_show')->name('ticketing.detail_show');
    Route::group(['middleware' => ['auth', 'isGuest']], function(){
       
        Route::get('/userit', function () {
            return view('layouts.userit');
        });
       
        // Route::get('/chat', function () {
        //     return view('user.chat');
        // });
        Route::get('/addchat', function () {
            return view('user.addchat');
        });
        Route::resource('/',FrontController::class);

        // Route::resource('ticketings', [FrontendController::class, 'ticketings']);
        // Route::resource('/contoh',Contoh::class);
      
     }); 


Addchat::routes();
