<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// rotta get associata al metodo index del pagecontroller api
Route::get('/', [PageController::class, 'index']);
// rotta get associata al metodo technologies del pagecontroller api
Route::get('/technologies', [PageController::class, 'technologies']);
// rotta get associata al metodo types del pagecontroller api
Route::get('/types', [PageController::class, 'types']);
// rotta get associata al metodo project singolo del pagecontroller api
Route::get('/project/{slug}', [PageController::class, 'project']);
// rotta get associata al metodo dei progetti per tipo del pagecontroller api
Route::get('/projectsbytype', [PageController::class, 'projectsByType']);
// rotta get associata al metodo dei progetti per tecnologia del pagecontroller api
Route::get('/projectsbytech', [PageController::class, 'projectsByTechs']);
