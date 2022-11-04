<?php

namespace App\Http\Controllers;
use App\Http\Requests\DumpFileRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class tablespacesController extends Controller
{
    //
    public function schemas()
    {
        return DB::select(
            'select username as schema_name
            from sys.dba_users
            order by username'
        );
    }
    public function publicPath()
    {
        return response(['path' => public_path() . "\\respaldos"], 200);
    }

    public function createTablespace(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("CREATE TABLESPACE " . $fields['name'] . " DATAFILE '" . public_path() . "\\tablespaces\\" . $fields['name'] . ".DBF' SIZE 100M AUTOEXTEND ON NEXT 50");

        return response(['message' => 'Tablespace creado con éxito'], 201);
    }
 
    public function createTemporaryTablespace(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("CREATE TEMPORARY TABLESPACE " . $fields['name'] . "_TEMP TEMPFILE '" . public_path() . "\\tablespaces\\" . $fields['name'] . "_TEMP.DBF' SIZE 25M AUTOEXTEND ON NEXT 50");

        return response(['message' => 'Tablespace creado con éxito'], 201);
    }
    public function deleteTablespace($tablespace)
    {
        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("DROP TABLESPACE " . $tablespace . " INCLUDING CONTENTS AND DATAFILES");

        return response(null, 204);
    }

    public function tablespaces()
    {
        return  DB::table('USER_TABLESPACES')
            ->select('TABLESPACE_NAME')
            ->get();
            
    }

    public function resizeTablespace(Request $request)
    {
        $fields = $request->validate([
            "tablespace" => "required",
            "size" => "required",
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        $resultado = DB::table("v\$datafile")
            ->select("NAME")
            ->where("NAME", "LIKE", "%" . $fields['tablespace'] . "%")
            ->get();

        $resultado = $resultado[0]->name;

        DB::statement("ALTER DATABASE DATAFILE '$resultado' resize " . $fields['size'] . "M");

        return response(['route' => 'Resize exitoso'], 200);
    }
    public function resizeTemporaryTablespace(Request $request)
    {
        $fields = $request->validate([
            "tablespace" => "required",
            "size" => "required",
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        $resultado = DB::table("v\$tempfile")
            ->select("NAME")
            ->where("NAME", "LIKE", "%" . $fields['tablespace'] . "%")
            ->get();

        $resultado = $resultado[0]->name;

        DB::statement("ALTER DATABASE DATAFILE '$resultado' resize " . $fields['size'] . "M");

        return response(['route' => 'Resize exitoso'], 200);
    }
}
