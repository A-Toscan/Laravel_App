<?php
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//todas las rutas con el prefijo api se debe colocar en la ruta der servidor para que funcione
Route::get('/', function () {
    //recuperaria información
    return 'Bienvenidos a mi app';
});
Route::post('/tasks', function () {
    //recuperaria información
    return 'Created task';
});
Route::post('/tasks', [TaskController::class, 'createTask']);
Route::get('/tasks/{id}', [TaskController::class, 'getAlltasks']);
Route::put('/tasks/{id}', [TaskController::class, 'updateTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);

