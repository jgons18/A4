<?php

namespace Framework\Sys;

/**
 * Process REQUEST_URI
 *
 * @author Me <jennigonzalez99asdfghj@gmail.com>
 */
class Request {
 
    /**
     *
     * @return void
     */
    static private $query=array();
    
    static function exploding(){
        echo $_SERVER['REQUEST_URI'].'<br>';
        //coje una cadena y la separa por el caracter barra,
        //en este caso,como un split
        $array_query=explode('/',$_SERVER['REQUEST_URI']);
        //left trim
        //
        //quita la primera posición(el 0 vació-cadena vacía)
        array_shift($array_query);
        //quita el final de la cadena si está vacía
        if(end($array_query)==""){
            array_pop($array_query);
        }
        self::$query=$array_query;//guardar consulta
        
        /*//volcado de variables --> depurar para ver si hay errores
        var_dump($array_query);
        die;//paramos para que no siga */
        
    }
    /**
     * extract item from request uri 
     * @return string
     */
    
    static function extract(){
        return array_shift(self::$query);
    }
    
    /**
     * extract array parameters from request uri
     * 
     * 
     * @return array associative array
     */
    static function getParams():?array{
        //array longitud

        //pares impares

        $result=[];
        return $result;
        
    }
}
