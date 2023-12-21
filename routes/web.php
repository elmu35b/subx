<?php

use Illuminate\Support\Facades\Route;
use Konekt\Address\Models\Country;
use Vanilo\Foundation\Models\Product;

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

// Route::get('/', function () {
//     $product = Product::create([
//         'name' => 'Dell Latitude E7240 Laptop',
//         'sku'  => 'DLL-74237'
//     ]);
//     return Product::first()->title;
//     // return view('welcome');
// });


// Routedom


Route::get('/b', function () {
    return 'First sub domain';
})->domain('blog.' . 'musab.link' );

Route::get('/', function () {
    return 'First sub domain';
});
