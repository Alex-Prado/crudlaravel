<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {

     
        $procedure = "CREATE PROCEDURE `VER_CONTACTOS`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY INVOKER 
        SELECT contacts.id,contacts.nombre, contacts.apellido,contacts.telefono,areas.nombrearea
        FROM contacts INNER JOIN areas ON contacts.area_id = areas.id";
        
        $procedure_filtro = "CREATE PROCEDURE `FILTRO_CONTACTO`(IN `_nombre` VARCHAR(50)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY
        INVOKER SELECT contacts.id, contacts.nombre, contacts.apellido, contacts.telefono, areas.nombrearea 
        FROM contacts INNER JOIN areas ON contacts.area_id=areas.id WHERE contacts.nombre LIKE CONCAT('%',_nombre,'%') 
        OR contacts.apellido LIKE CONCAT('%',_nombre,'%') OR contacts.telefono LIKE CONCAT('%',_nombre,'%') 
        OR areas.nombrearea LIKE CONCAT('%',_nombre,'%')";
        DB::unprepared($procedure);
        DB::unprepared($procedure_filtro);
    }


    public function down()
    {
        $delete = 'DROP PROCEDURE IF EXISTS VER_CONTACTOS';
        $delete_filtro = 'DROP PROCEDURE IF EXISTS FILTRO_CONTACTO';
        DB::unprepared($delete);
        DB::unprepared($delete_filtro);
    }
};
