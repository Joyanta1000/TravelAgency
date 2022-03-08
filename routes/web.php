<?php

use App\Http\Controllers\MapLocationsController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('website.web.index');
    })->name('/');

    Route::get('/hotel-detailed', function () {
        return view('website.hotel.hotel-detailed');
    })->name('hotel-detailed');

    Route::get('/dashboard1', function () {
        return view('website.web.dashboard1');
    })->name('dashboard1');

    Route::get('/hotel-index', function () {
        return view('website.hotel.hotel-index');
    })->name('hotel-index');

    Route::get('/hotel-list', function () {
        return view('website.hotel.hotel-list');
    })->name('hotel-list');

    Route::get('hotel-list', 'HotelController@index')->name('hotel-list');
    Route::get('hotel-detailed/{id}', 'HotelController@show')->name('hotel-detailed');
    Route::get('verify_invoice_to_review', 'HotelController@verify_invoice_to_review')->name('verify_invoice_to_review');
    Route::post('review/{id}', 'HotelController@store')->name('review');
    Route::get('invoice_wise_review', 'HotelController@invoice_wise_review')->name('invoice_wise_review');

    
});

// Route::prefix('Location')->group(
//     function () {
        // Route::resource('Location', 'MapLocationsController');
//     }
// );

Route::get('Location/index', 'MapLocationsController@index')->name('Location.index');
Route::get('Location/update/{id}', 'MapLocationsController@index')->name('Location.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::fallback(function () {

    return abort(404);
});
