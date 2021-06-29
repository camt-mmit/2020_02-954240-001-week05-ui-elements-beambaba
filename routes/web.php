<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

route::get('/home', [MainController::class, 'showHome']);
route::get('/friend', [MainController::class, 'showFriend']);
route::get('/me', [MainController::class, 'showMe']);
route::get('/schedule', [MainController::class, 'showSchedule']);

