<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use tablespacesController:
use App\Http\Controllers\tablespacesController;
use Illuminate\Http\Request;


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

Route::get('tablespaces/schemas', [tablespacesController::class, 'schemas']);
Route::get('tablespaces/publicPath', [tablespacesController::class, 'publicPath']);
Route::post('tablespaces/create', [tablespacesController::class, 'createTablespace']);
Route::post('tablespaces/temporary', [tablespacesController::class, 'createTemporaryTablespace']);
Route::delete('tablespaces/delete/{tablespace}', [tablespacesController::class, 'deleteTablespace']);
Route::get('tablespaces/list', [tablespacesController::class, 'tablespaces']);


Route::get('/datos', function () {
    return DB::select(
        'select username as schema_name
        from sys.dba_users
        order by username'
    );
});
