<?php

use Illuminate\Support\Facades\Route;
// Admin Dashboard
use App\Http\Controllers\Admin\DashboardController;
// users Dashboard
use App\Http\Controllers\user\userDashboardController;
use App\Http\Controllers\user\BettingController;

// users panel modules

// Admin modules
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TransactionsController as AdminTransactionsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralSettingController;

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
Route::get('/signup', [RegisterController::class, 'register_form'])->name('signup');
Route::get('logout', [LoginController::class, 'logout']);
Route::get('account/verify/{token}', [LoginController::class, 'verifyAccount'])->name('user.verify'); 
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/', [HomeController::class,'index']);
Route::get('/about-us', [HomeController::class,'about']);
Route::get('/all-matches', [HomeController::class,'all_matches']);
Route::get('/rules', [HomeController::class,'rules']);
Route::get('/contact-us', [HomeController::class,'contactus']);
Route::get('/privacy-policy', [HomeController::class,'privacy_policy']);
Route::get('/terms-and-condition', [HomeController::class,'terms_condition']);
Route::get('/faq', [HomeController::class,'faq']);

  
Route::group(['prefix' => 'admin','middleware'=> ['auth']], function(){
    Route::get('/change_password', [DashboardController::class, 'change_password'])->name('change_password');
    Route::post('/store_change_password', [DashboardController::class, 'store_change_password'])->name('store_change_password');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile.index');
   // Storage
    Route::get('/document', [DashboardController::class, 'document'])->name('document');
    Route::get('/signature', [DashboardController::class, 'signature'])->name('signature');

    Route::post('profile/update', [DashboardController::class, 'update'])->name('profile.update');
    Route::resource('general_setting',GeneralSettingController::class);
    Route::post('wallet/create/withdraw', [DashboardController::class, 'createdewithdraw'])->name('admin.wallet.create.withdraw');
  
    
});
Auth::routes();
Auth::routes(['verify' => true]);
 Route::group(['prefix' => 'user','middleware'=> ['auth']], function(){
 
    Route::get('/change_password', [userDashboardController::class, 'change_password'])->name('user.change_password');
    Route::post('/store_change_password', [userDashboardController::class, 'store_change_password'])->name('store_change_password');
    Route::get('/dashboard', [userDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/sports/bets/{sport}', [userDashboardController::class, 'sport'])->name('sport.bets');
	Route::get('/sports/game/{sport}', [userDashboardController::class, 'sport_game'])->name('sport.game');
    Route::get('/sports/game/live/{sport}', [userDashboardController::class, 'sport_game_live'])->name('sport.live');
    Route::get('/sports/view/{id}', [userDashboardController::class, 'sport_view'])->name('sport.view');
    Route::get('/sports/store', [userDashboardController::class, 'store_sport_data'])->name('sport.store');


    Route::post("spread/place_spread_bet",[BettingController::class , 'place_Spread_betting'])->name("place_spread_bet");
    Route::post("spread/place_total_bet",[BettingController::class , 'place_total_bet'])->name("place_total_bet");
    Route::post("spread/place_moneyline_betting",[BettingController::class , 'place_moneyline_betting'])->name("place_moneyline_betting");



    //user Profile
    Route::get('/profile', [userDashboardController::class, 'profile'])->name('user.profile');
    Route::post('/update/profile', [userDashboardController::class, 'UserProfileUpdate'])->name('user.profile.update');
    Route::post('/edit/profile', [userDashboardController::class, 'UserEditProfile'])->name('user.edit.profile');
    Route::post('/bank/detail', [userDashboardController::class, 'UserBankDetail'])->name('user.bank.detail');
  
});


  
