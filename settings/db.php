<?php

class DB{
    public static $instancia=null;
    public static function crearInstancia(){

        if(!isset(self::$instancia)){
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=Centro_Medico', 'root', '', $opciones);
            echo "Conectado...";
        }
        return self::$instancia;
    }
}

?>