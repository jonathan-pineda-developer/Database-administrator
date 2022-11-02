<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use tablespacesController:
use App\Http\Controllers\tablespacesController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/datos', function () {
    $datos = DB::select('select * from v$tablespace');
    return $datos;
    
});


Route::get('/me', function () {
    //mensaje de prueba
    return '';
});
Route::controller(tablespacesController::class)->group(function (){
    Route::get('/tablespaces','index');
    Route::get('/tablespaces/{id}','show');
    Route::post('/tablespaces','crear');

}); 