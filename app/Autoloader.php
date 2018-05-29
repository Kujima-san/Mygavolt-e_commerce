<?php

namespace App ;
/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * fonction permettant d'enregistrer quel autoloader appeler
     */
    static function register(){

        /* __CLASS__ permet de retourner le nom de la classe actuelle */
        spl_autoload_register(array(__CLASS__, 'autoload')) ;

    }


    /**
     * @param $class Permet d'autoloader les différents fichiers de class
     */
    static function autoload($class){

        // Si le namespace de la class commence par app.
        if (strpos($class, __NAMESPACE__ . '\\') === 0)
        {
            $class = str_replace(__NAMESPACE__ . '\\' , '', $class) ;
            $class = str_replace('\\', '/', $class);
            require __DIR__ .'/'. $class . '.php';
        }


    }


}