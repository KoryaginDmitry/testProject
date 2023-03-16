<?php

use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StateController;
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

Route::get('/', [HomeController::class, 'view'])->name('home');
Route::get('/company', [AboutCompanyController::class, 'view'])->name('company');


Route::get('/states', [StateController::class, 'list'])->name('states');
Route::get('/states/{state:slug}', [StateController::class, 'state'])->name('state');

Route::get('/contacts', [ContactsController::class, 'view'])->name('contacts');
Route::post('/contacts/create', [ContactsController::class, 'createFeedback'])->name('contacts.create');
