<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteController;

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

Route::get('/', [siteController::class, 'homePage']);

Route::get('/welcome', [siteController::class, 'welcome']);

// Open index page with this route
Route::get('/newtask', [siteController::class,'newtask']);
Route::get('/tasklist', [siteController::class, 'tasklist']);
Route::post('/newtasksubmit', [siteController::class, 'newtasksubmit']);

// Edit routes 
Route::get('/edit-task/{taskId}', [siteController::class, 'editTask']);
Route::post('/update-task-submit', [siteController::class, 'updateTask']);

// Delete routes 
Route::get('delete-task/{taskId}', [siteController::class, 'deleteTask']);
