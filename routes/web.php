<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\MessageController;

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

/* *******************Visitor************************************* */
/* Route::get('/', [ClientController::class, 'index'])
    ->name('/'); */

/* *******************Client************************************* */
Route::get('/', [AuthAdminController::class, 'adminLogin'])
    ->name('/');

// Route::get('/clientDashboard', [ClientController::class, 'dashboard'])
//     ->name('clientDashboard')
//     ->middleware('client');

// Route::get('/clientAnnonces', [ClientController::class, 'annonces'])
//     ->name('clientAnnonces')
//     ->middleware('client');

// Route::get('/annonces', [ClientController::class, 'scroll']);

// Route::get('/annonce/{annonce:slug}', [ClientController::class, 'chapters'])
//     ->name('clientChapters')
//     ->middleware('client');

// Route::get('/chapter/{chapter:slug}', [ClientController::class, 'sequences'])
//     ->name('clientSequences')
//     ->middleware('client');

// Route::get('/clientMessages', [ClientController::class, 'messages'])
//     ->name('clientMessages')
//     ->middleware('client');

// Route::get('/clientShowMessage', [ClientController::class, 'showmessage'])
//     ->name('clientShowMessage')
//     ->middleware('client');

// Route::get('/clientProfil', [ClientController::class, 'profil'])
//     ->name('clientProfil')
//     ->middleware('client');

Route::get('home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

// Route::get('/maintenanceClient', function () {
//         return view('maintenanceClient');
//     })->name('maintenaneClient');
// //client log
// Route::get('login', [AuthController::class, 'login'])
//     ->name('login');
// Route::post('clientAuthenticate', [AuthController::class, 'clientAuthenticate'])
//     ->name('clientAuthenticate');
// Route::post('clientLogout', [AuthController::class, 'clientLogout'])
//     ->name('clientLogout');


/* *******************Admin*********************************************************** */
//admin log
Route::get('adminLogin', [AuthAdminController::class, 'adminLogin'])
->name('adminLogin');
Route::post('authenticate', [AuthAdminController::class, 'authenticate'])
->name('authenticate');
Route::post('logout', [AuthAdminController::class, 'logout'])
->name('logout');

//Admin route
Route::get('/admin', [AuthAdminController::class, 'adminLogin'])
    ->name('adminLogin');
//Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//Annonces
Route::resource('annonces', AnnonceController::class);
//Messages
Route::resource('messages', MessageController::class);
//Utilisateurs
Route::resource('users', UserController::class);
//ROLE
Route::resource('roles', RoleController::class);
//Permission
Route::resource('permissions', PermissionController::class);
});
//profil
Route::get('admin/profil', [UserController::class,'profil'])
    ->name('profil')
    ->middleware('auth');
//Status
Route::patch('admin/annonces/{id}/toggle', [AnnonceController::class,'toggleStatus'])->name('annonces.toggleStatus');
Route::patch('admin/users/{id}/toggle', [UserController::class,'toggleStatus'])->name('users.toggleStatus');
Route::patch('admin/messages/{id}/toggle', [MessageController::class,'toggleStatus'])->name('messages.toggleStatus');
//All status
Route::patch('admin/annonces', [AnnonceController::class, 'allStatus'])->name('annonces.allStatus');
Route::patch('admin/messages', [MessageController::class, 'allStatus'])->name('messages.allStatus');

//Maintenance page
Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenane');
//charts js
Route::get('/chart-data2', [HomeController::class, 'chartData2'])->name('chart-data2');
