<?php
namespace Framework\Sys;

/**
 * Application kernel
 *
 * @author Me
 */
class Kernel {
    /**
     * This methode allow initials application
     *  Fronted Controlles
     * @return void
     */
    static private $controller;
    static private $action;
    static private $params;
    
    public static function init(){
        
        //echo 'init';
        //process the REQUEST_URI -->
        Request::exploding();
        
        //cada vez que hagamos una función extra
        //sacaremos un elemento
        self::$controller= Request::extract();
        self::$action = Request::extract();
        self::$params = Request::getParams();

        /*var_dump(self::$controller);
        var_dump(self::$action);
        die;*/

        //call to Router applying
        self::router();
        //controller and action
    }
    /*static function getFileCont():?string {//devuelve un string o un null
        //si no ha añadido ningún controlador hará lo siguiente
        //select default action and controller
        self::$controller=(self::$controller!= "")?self::$controller:'home' //if en unica linea
        //si no es null,es controller sino es home
        self::$action=(self::$action!="")?self::$action:'home';//home es la acción por defecto
        //find controllers(ruta)
        $filename = strtolower(self::$controller).'.php';
        $fileroute=
            return $fileroute;//obtiene la ruta del fichero

    }*/
    /**
     * looks for controller and action
     * instantiate controller and calls the action
     * @return void
     */
    static function router(){
        //if exists file controller and class controller

        self::$controller=(self::$controller!="")?self::$controller:'home';
		self::$action=(self::$action!="")?self::$action:'home';
		$class='\\Framework\App\Controllers\\'.ucfirst(self::$controller);
		echo $class;
		if(class_exists($class)){
            self::$controller=new $class(self::$params);
            if(is_callable(array(self::$controller,self::$action))){
                //si existe ese m�todo(action) dentro de ese objeto,lo llamaremos
                call_user_func(array(self::$controller,self::$action));
            }else{//is not callable
                //si no existe esa acci�n
                self::$action='error';
                call_user_func(array(self::$controller,self::$action));
            }
        }
    }

}
