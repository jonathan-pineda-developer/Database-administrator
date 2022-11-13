<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use tablespacesController:
use App\Http\Controllers\tablespacesController;
use Illuminate\Http\Request;
use App\Http\Requests;
use RealRashid\SweetAlert\Facades\Alert;



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
Route::get('/home', function () {
    return view('welcome');
});

//----------------------------- TEMPORARY - TABLESPACES -----------------------------
Route::get('/create-table', function () {
    return view('tablespace/create');
});
Route::get('/list-tablespaces', [tablespacesController::class, 'tablespaces']);
Route::post('/tablespace/createtable', [tablespacesController::class, 'createtable']);
Route::get('/show-tablespace',function () {
    return view('tablespace/show',['data'=>tablespacesController::tablespaces()]);
});
Route::get('/create-temporary', function () {
    return view('temporal/create');
});
Route::post('/temporal/createTemporaryTablespace', [tablespacesController::class, 'createTemporaryTablespace']);
Route::get('/update-tablespace', function () {
    return view('tablespace/update',['data'=>tablespacesController::tablespaces()]);
});
Route::post('/tablespace/resizeTablespace', [tablespacesController::class, 'resizeTablespace']);
Route::get('/delete-tablespace', function () {
    return view('tablespace/delete',['data'=>tablespacesController::tablespaces()]);
});
Route::post('/tablespace/deleteTablespace', [tablespacesController::class, 'deleteTablespace']);
Route::get('/update-temporal', function () {
    return view('temporal/update',['data'=>tablespacesController::tablespaces()]);
});
Route::post('temporal/resizeTemporaryTablespace', [tablespacesController::class, 'resizeTemporaryTablespace']);

//----------------------------- USUARIOS - SCHEMAS -----------------------------
Route::get('/show-schema', function () {
    return view('esquemas/show',['data2'=>tablespacesController::schemas()]);
});

Route::get('/create-user', function () {
    return view('esquemas/create');
});

Route::post('/esquemas/createUser', [tablespacesController::class, 'createUser']);

Route::get('/delete-user', function () {
    return view('esquemas/delete',['data3'=>tablespacesController::schemas()]);
});
Route::post('/esquemas/deleteUser', [tablespacesController::class, 'deleteUser']);
Route::get('/update-user', function () {
    return view('esquemas/update');
});
Route::post('/esquemas/updateUser', [tablespacesController::class, 'updateUser']);

//----------------------------- RESPALDOS -----------------------------
Route::get('/backup-user', function () {
    return view('respaldos/usuario',['data4'=>tablespacesController::schemas()]);
});
Route::post('/respaldos/createSchemaBackUp', [tablespacesController::class, 'createSchemaBackUp']);

Route::get('/delete-userbackup', function () {
    return view('respaldos/usuario');
});
Route::post('/respaldos/borrarRespaldoUsuario', [tablespacesController::class, 'borrarRespaldoUsuario']);

//----------------------------- AUDITORIA -----------------------------
Route::get('/auditoria-home', function () {
    return view('auditoria/index',['data5'=>tablespacesController::auditoriaGeneral()]);
});
Route::get('/auditoria/auditoriaConexiones', [tablespacesController::class, 'auditoriaConexiones']);









//-----------------------------BACKUPS SCHEMA-----------------------------

//delete .log and .dmp files
Route::get('/delete-backup/{schema}', [tablespacesController::class, 'deleteSchemaBackUp']);
//listar una tabla de una schema(schema = basedatos && tabla = clase)[muestra las columnas de la tabla]
Route::get('/schema-table/{schema}/{table}', [tablespacesController::class, 'columnOfATableOfASchema']);
//Listar todas las tablas del schema [ver todas las clases dentro de la base de datos]
Route::get('/schema-tables/{schema}', [tablespacesController::class, 'tablasDeSchemas']);
//analizar un schema
Route::get('/analyze-schema/{schema}', [tablespacesController::class, 'analizeSchema']);
//crear un bakup de una tabla SIMILAR A LA SCHEMA TABLE
Route::get('/table-backup/{schema}/{table}', [tablespacesController::class, 'createTableBackUp']);

//----------------------------------------------------------
//listar privilegios
Route::get('/list-privileges', [tablespacesController::class, 'privileges']);
//listar roles
Route::get('/list-roles', [tablespacesController::class, 'roles']);
//listar usuarios
Route::get('/list-users', [tablespacesController::class, 'users']);
//listar privilegios de un usuario
Route::get('/list-privilages-user/{user}', [tablespacesController::class, 'privilegesOfAUser']);
//asignar un rol a un usuario
Route::get('/assign-role/{user}/{role}', [tablespacesController::class, 'assignRole']);

