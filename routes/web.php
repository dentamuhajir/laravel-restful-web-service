<?php

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

use Illuminate\Support\Facades\DB;

// Test database connection
try {
    DB::connection()->getPdo();
} catch (\Exception $e) {
    die("Could not connect to the database.  Please check your configuration. error:" . $e );
}

Route::get('/', function () {
    return view('welcome');
});
