<?php

function OpenCon()
    {
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $baseDatos = "mypet1";

        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }


               /* 
           Podemos hacer la conexión por PDO. Personalmente creo que es mejor y más rápida para hacer
           las funciones
           
           class Conectar {
                public static function Conexion(){
                    try {
                        $conexion= new PDO("mysql:host=localhost; dbname=mypet1", "root", "");
                        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $conexion->exec("set character set utf8");
                        

                    } catch (Exception $exc) {
                        echo $exc->getMessage() . " En lìnea => " . $exc->getLine();
                    }
                    
                    return $conexion;
                                }
            }*/

?>