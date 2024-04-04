<?php

use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\WorkYearController;
use App\Http\Controllers\session\PageController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dash', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');



Route::get('/charts-apex', [DashboardController::class, 'chartsapex'])->name('dashboard.charts-apex')->middleware('auth');

Route::get('/extended-lightbox', [DashboardController::class, 'extendedlightbox'])->name('dashboard.extended-lightbox')->middleware('auth');

Route::get('/form-advanced', [DashboardController::class, 'formadvanced'])->name('dashboard.form-advanced')->middleware('auth');

Route::get('/layouts-horizontal', [DashboardController::class, 'layoutshorizontal'])->name('dashboard.layouts-horizontal')->middleware('auth');

Route::get('/maps-google', [DashboardController::class, 'mapsgoogle'])->name('dashboard.maps-google')->middleware('auth');

Route::get('/pages-404', [DashboardController::class, 'pages404'])->name('dashboard.pages-404');

Route::get('/tables-datatable', [DashboardController::class, 'tablesdatatable'])->name('dashboard.tables-datatable')->middleware('auth');

Route::get('/ui-alerts', [DashboardController::class, 'uialerts'])->name('dashboard.ui-alerts')->middleware('auth');


Route::get('/register', [AuthController::class, 'authregister'])->name('auth.auth-register');
Route::post('/register', [AuthController::class, 'authregisterPost'])->name('auth.auth-register');

Route::get('/login', [AuthController::class, 'authlogin'])->name('auth.auth-login');
Route::post('/login', [AuthController::class, 'authloginPost'])->name('auth.auth-login');

Route::delete('/log-out', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/logout', [AuthController::class, 'authlogout'])->name('auth.auth-logout');

Route::get('/email-verification', [AuthController::class, 'authemailverification'])->name('auth.auth-email-verification');

Route::get('/confirm-mail', [AuthController::class, 'authconfirmmail'])->name('auth.auth-confirm-mail');

Route::get('/lock-screen', [AuthController::class, 'authlockscreen'])->name('auth.auth-lock-screen');

Route::get('/recoverpw', [AuthController::class, 'authrecoverpw'])->name('auth.auth-recoverpw');

Route::get('/two-step-verification', [AuthController::class, 'authtwostepverification'])->name('auth.auth-two-step-verification');

Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/service', [PageController::class,'service'])->name('service');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/portofolio', [PageController::class,'portofolio'])->name('portofolio');
Route::get('/blog', [PageController::class,'blog'])->name('blog');





Route::get('/Année-de-gestion', [WorkYearController::class, 'WorkYear'])->name('WorkYear')->middleware('auth');
Route::get('/Année de gestion', [WorkYearController::class, 'WorkYea'])->name('AjoutYear')->middleware('auth');

Route::post('/submit', [WorkYearController::class, 'submitForm'])->name('submit')->middleware('auth');

Route::post('/change-status', [WorkYearController::class, 'status'])->name('changeStatus');


