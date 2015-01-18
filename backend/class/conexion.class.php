<?php
 /*
* @version		$Id: copyright.php 
* @Credit: 		Carlos Servín 2015 
* @package		Apollus! Business CRM
* @copyright	Copyright (C) 2015 Carlos Servín. http://www.servin.mx
* @license		GNU/GPL, see http://www.gnu.org/licenses/gpl-2.0.html
* Apollus! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See copyright.php for copyright notices and details.
*/
class Conexion{
    private static $instancia;
    private $dbh;
    private function __construct(){
        try {
 			//$this->dbh = new PDO("mysql:host=$bd_host;dbname=$bd_data_base", $bd_user, $bd_password);
            $this->dbh = new PDO('mysql:host=localhost;dbname=apollus', 'root', 'root');
            $this->dbh->exec("SET CHARACTER SET utf8");
 
        } catch (PDOException $e) {
 
            print "Error!: " . $e->getMessage();
 
            die();
        }
    }
 
    public function prepare($sql){
 
        return $this->dbh->prepare($sql);
 
    }
    public static function singleton_conexion(){
 
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
 
        }
 
        return self::$instancia;
        
    }
 
 
     // Evita que el objeto se pueda clonar
    public function __clone(){
 
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
 
    }
}