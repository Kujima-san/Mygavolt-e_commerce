<?php
/**
 * Created by PhpStorm.
 * User: berta
 * Date: 04/05/2018
 * Time: 17:30
 */

namespace App;

use \PDO ;

class Database{

    private $db_name ;
    private $db_user ;
    private $db_pass ;
    private $db_host ;
    private $pdo ;

    /**
     * Database constructor.
     * @param $db_name
     * @param $db_user
     * @param $db_pass
     * @param $db_host
     */
    public function __construct($db_name, $db_user, $db_pass, $db_host){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }


    /**
     * @return propriété|PDO
     * Dans le cas ou la propriété est null on créé le lien avec la base de donnée puis dans tous les cas ou retourne la propriété
     */
    private function getPDO(){
        if ($this->pdo === null){
            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root' , '') ;
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
            $this->pdo = $pdo ;

        }

        return $this->pdo ;
    }


    public function query($statement){

    }

    public function exec($statement){

    }

}