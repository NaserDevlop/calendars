<?php

 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EventsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('main', function () {
    return view('main');
});


// Route::get('add-events', function () {
//     return view('addevent');
// })->name('add');


 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('show', [App\Http\Controllers\ShowController::class, 'show']);
Route::get('edite-personal/{email}', [App\Http\Controllers\ShowController::class, 'edite']);

Route::get('add-events', [App\Http\Controllers\EventsController::class, 'index']);
Route::post('createnew', [App\Http\Controllers\EventsController::class, 'createnew'])->name('create');

Route::get('showevents', [App\Http\Controllers\EventsController::class, 'showevents']);
Route::get('update-events/{serial}', [App\Http\Controllers\EventsController::class, 'update_form']);
Route::post('update-event/{serial}', [App\Http\Controllers\EventsController::class, 'update_event'])->name('create_update');
Route::get('delete-event/{serial}', [App\Http\Controllers\EventsController::class, 'delete_event'])->name('delete-event');

Auth::routes();