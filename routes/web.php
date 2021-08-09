<?php

use Illuminate\Support\Facades\Route;
use App\Models\Word;
use App\Http\Controllers\VoyagerController;


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

Route::get('/', [VoyagerController::class, 'index']);

Route::get('/contacts', [VoyagerController::class, 'contacts']);

Route::get('/services', [VoyagerController::class, 'services']);

Route::get('/work', [VoyagerController::class, 'work']);

Route::get('locale/{lang}', [\App\Http\Controllers\LocalizationController::class, 'setLang']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
