<?php

use App\Livewire\Home\Index as Home;
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

Route::get('/', Home::class)->name('lading.page');

Route::get('/login', function () {
    return to_route(route('filament.admin.auth.login'))->name('login');

});
