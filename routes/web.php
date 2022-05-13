<?php
use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/create', [TaskController::class, 'create']);
Route::post('/upload', [TaskController::class, 'upload']);
Route::get('/{id}/edit', [TaskController::class, 'edit']);
Route::patch('/update', [TaskController::class, 'update']);
Route::get('/{id}/iscompleted', [TaskController::class, 'iscompleted']);
Route::get('/{id}/delete', [TaskController::class, 'delete']);