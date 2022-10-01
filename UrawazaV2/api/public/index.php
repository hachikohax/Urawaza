<?php 

use Illuminate\Contracts\Http\Kernel; 
use Illuminate\Http\Request; 

define('LARAVEL_START', microtime(true));

/*
|-----------------------------------------------------------
| Check if app is under maintenance 
|-----------------------------------------------------------
|
| If the app is in maintenance / demo mode via the "down" command 
| this file will load so that pre-rendered content can be shown 
| instead of starting the framework, which could cause an exception 
|
*/

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|------------------------------------------------------------
| Run the app
|------------------------------------------------------------
|
| Once the app is completed, the incoming requests can be handled using the apps HTTP kernel
| the response will be sent back to the client's browser allowing them to 
| use the app.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);