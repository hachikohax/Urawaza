<?php 

use Illuminate\Support\Facades\Route;

/** Web routes -- register web routes for app. 
 * Routes loaded by RouteServiceProvider in group that
 * contains web middleware group
 */

 Route::get('/', function () {
    return view('welcome');
 });

 Route::get('uapi', function() {
    return view('index');
 });