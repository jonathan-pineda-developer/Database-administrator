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
//un ruta para un el formulario de crear tablespace por get
Route::get('/create-table', function () {
    return view('tablespace/create');
});
Route::post('/tablespace/createtable', [tablespacesController::class, 'createtable']);

/*Route::get('/show-tablespace',[tablespacesController::class, 'tablespaces']);*/
Route::get('/show-tablespace',function () {
    return view('tablespace/show',['data'=>tablespacesController::tablespaces()]);
});

Route::get('/create-temporary', function () {
    return view('temporal/create');
});
Route::post('/temporal/createTemporaryTablespace', [tablespacesController::class, 'createTemporaryTablespace']);



























//ver los tablespaces
//Route::get('/list-tablespaces', [tablespacesController::class, 'tablespaces']);



//Route::post('tablespaces/temporary', [tablespacesController::class, 'createTemporaryTablespace']);
//Route::delete('tablespaces/delete/{tablespace}', [tablespacesController::class, 'deleteTablespace']);
//Route::get('tablespaces/list', [tablespacesController::class, 'tablespaces']);

//-------------------------TABLESPACES-------------------------------------

//resize a tablespace
Route::get('/resize/{tablespace}/{size}', [tablespacesController::class, 'resizeTablespace']);
//resize a temporal tablespace
Route::get('/resize-temp/{tablespace}/{size}', [tablespacesController::class, 'resizeTemporaryTablespace']);
//create a tablespace
Route::get('/create/{tablespace}', [tablespacesController::class, 'createTablespace']);
//create a temporary tablespace
Route::get('/create-temp/{tablespace}', [tablespacesController::class, 'createTemporaryTablespace']);
//Delete a tablespace
Route::get('/delete/{tablespace}', [tablespacesController::class, 'deleteTablespace']);
//-----------------------------BACKUPS SCHEMA-----------------------------
//list schemas
Route::get('/list-schemas', [tablespacesController::class, 'schemas']);
//create a schema backup
Route::get('/schema-backup/{schema}', [tablespacesController::class, 'createSchemaBackUp']);
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

