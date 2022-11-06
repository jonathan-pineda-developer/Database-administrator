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

    /* PARA POST METHOD CREAR TABLESPACE
    public function createTablespace(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("CREATE TABLESPACE " . $fields['name'] . " DATAFILE '" . 'C:\\app\\50683\\product\\21c\\oradata\\XE\vscode\\tablespaces\\' . $fields['name'] . ".DBF' SIZE 100M AUTOEXTEND ON NEXT 50");

        return response(['message' => 'Tablespace creado con éxito'], 201);
    }*/

    public function createTablespace($tablespace)
    {
        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("CREATE TABLESPACE " . $tablespace . " DATAFILE '" . 'C:\\app\\50683\\product\\21c\\oradata\\XE\vscode\\tablespaces\\' . $tablespace . ".DBF' SIZE 100M AUTOEXTEND ON NEXT 50");

        return response(['message' => 'Tablespace creado con éxito'], 201);
    }
 /* PARA POST METHOD CREAR TABLESPACE TEMPORAL
    public function createTemporaryTablespace(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("CREATE TEMPORARY TABLESPACE " . $fields['name'] . "_TEMP TEMPFILE '" . public_path() . "\\tablespaces\\" . $fields['name'] . "_TEMP.DBF' SIZE 25M AUTOEXTEND ON NEXT 50");

        return response(['message' => 'Tablespace creado con éxito'], 201);
    }*/
    public function createTemporaryTablespace($tablespace)
    {
        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("CREATE TEMPORARY TABLESPACE " . $tablespace . "_TEMP TEMPFILE '" . 'C:\\app\\50683\\product\\21c\\oradata\\XE\vscode\\tablespaces\\' . $tablespace . "_TEMP.DBF' SIZE 25M AUTOEXTEND ON NEXT 50");

        return response(['message' => 'TempFile  creado con éxito'], 201);
    }

    public function deleteTablespace($tablespace)
    {
        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("DROP TABLESPACE " . $tablespace . " INCLUDING CONTENTS AND DATAFILES");

        return response(null, 204);
    }

    /*public function tablespaces()
    {
        return  DB::table('USER_TABLESPACES')
            ->select('TABLESPACE_NAME')
            ->get();
            
    }*/
    public function tablespaces()
    {
        return DB::select(
            'select tablespace_name as tablespace_name
            from dba_tablespaces
            order by tablespace_name'
        );
    }
    /*
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
    }*/
    public function resizeTemporaryTablespace($tablespace,$size)
    {
        DB::statement('alter session set "_oracle_script"=true');   


        DB::statement("ALTER DATABASE TEMPFILE  '" . 'C:\\app\\50683\\product\\21c\\oradata\\XE\vscode\\tablespaces\\' . $tablespace . ".DBF' RESIZE " . $size . "M");

        return response(['message' => 'Resize exitoso'], 201);
    }
 /* METODO POST PARA CAMBIAR EL TAMAÑO DE UN TEMPORARY TABLESPACE
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
    }*/
    //cambiar de tamaño a un tablespace
    public function resizeTablespace($tablespace, $size)
    {
        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("ALTER DATABASE DATAFILE '" . 'C:\\app\\50683\\product\\21c\\oradata\\XE\vscode\\tablespaces\\' . $tablespace . ".DBF' RESIZE " . $size . "M");

        return response(['message' => 'Tablespace redimensionado con éxito'], 201);
    }
    public function createSchemaBackUp($schema)
    {
        DB::statement('alter session set "_oracle_script"=true');

        // DB::statement("CREATE OR REPLACE DIRECTORY RESPALDO AS 'D:\Trabajos_U\II_semestre_2021\Administracion_Bases\Proyectos\Proyecto_1\Administrador-Respaldos\Adminstrador-Respaldos-Backend\public\respaldos'");

        DB::statement("CREATE OR REPLACE DIRECTORY RESPALDO AS " . "'" . public_path() . "\\respaldos'");

        // DB::statement('GRANT READ, WRITE ON DIRECTORY RESPALDO TO administrador_fachero');

        $cmd = "EXPDP SYSTEM/coutJonathan97@XE SCHEMAS=" . $schema . " DIRECTORY=RESPALDO DUMPFILE=" . $schema . ".DMP LOGFILE=" . $schema . ".LOG";

        shell_exec($cmd);

        $path = 'respaldos/' . $schema . '.DMP';

        return response()->download($path);
    }
    public function deleteSchemaBackUp($schema)
    {
        $path = 'respaldos/' . $schema . '.DMP';

        File::delete($path);

        $path = 'respaldos/' . $schema . '.LOG';

        File::delete($path);

        return response(null, 204);
    }
    // listar una tabla de una schema(schema = basedatos && tabla = clase)[muestra las columnas de la tabla] 
    public function columnOfATableOfASchema($schema, $table)
    {
        return DB::select("select column_name from all_tab_columns where table_name ='" . $table . "' AND OWNER ='" . $schema . "'");
    }
    public function tablasDeSchemas($schema)
    {
        return DB::table('all_tables')
            ->select('table_name')
            ->where('owner', $schema)
            ->orderBy('table_name')
            ->get();
    }
    public function analizeSchema($schema)
    {
      
        DB::statement('alter session set "_oracle_script"=true');

        $tablas = DB::table('all_tables')
            ->select('table_name')
            ->where('owner', $schema)
            ->orderBy('table_name')
            ->get();

        foreach ($tablas as $tabla) {
         DB::statement("ANALYZE TABLE " . $schema . "." . $tabla->table_name . " COMPUTE STATISTICS");
        }

        //return response(['message' => 'Tablas re-analizadas'], 200);
        return response(['message' => 'Tablas analizadas', 'tablas' => $tablas], 200);
       
    }
    //listar privilegios de un usuario 
     public function privileges()
    {
        return DB::table('DBA_SYS_PRIVS')
            ->select('privilege')
            ->distinct()
            ->get();
    }
    //listar roles de un usuario
    public function roles()
    {
        return DB::table('DBA_ROLES')
            ->select('role')
            ->get();
    }
    //asignar un role a un usuario
   /*   METODO POST PARA ASIGNAR UN ROLE A UN USUARIO
    public function assignRole(Request $request)
    {
        $fields = $request->validate([
            "user" => "required",
            "role" => "required",
        ]);

        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("GRANT " . $fields['role'] . " TO " . $fields['user']);

        return response(['message' => 'Rol asignado'], 201);
    }*/
    //Asignar un role a un usuario por metodo get
    public function assignRole($user, $role)
    {
        DB::statement('alter session set "_oracle_script"=true');

        DB::statement("GRANT " . $role . " TO " . $user);

        return response(['message' => 'Rol asignado'], 201);
    }
    //listar los usuarios del sistema
    public function users()
    {
        return DB::table('DBA_USERS')
            ->select('username')
            ->get();
    }


}
