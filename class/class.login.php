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

require_once 'class/conexion.class.php';
session_start();
class Login
{
 
    private static $instancia;
    private $dbh;
    private function __construct()
    {
 
        $this->dbh = Conexion::singleton_conexion();
 
    }
    public static function singleton_login()
    {
 
        if (!isset(self::$instancia)) {
 
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
 
        }
 
        return self::$instancia;
 
    }
    
    public function login_users($nick,$password)
    {
        
        try {
            
            $sql = "SELECT * from users WHERE nombre = ? AND password = ?";
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1,$nick);
            $query->bindParam(2,$password);
            $query->execute();
            $this->dbh = null;
 
            //si existe el usuario
            if($query->rowCount() == 1)
            {
                
                 $fila  = $query->fetch();
                 $_SESSION['nombre'] = $fila['nombre'];                
                 return TRUE;
    
            }
            
        }catch(PDOException $e){
            
            print "Error!: " . $e->getMessage();
            
        }        
        
    }
    
 
     // Evita que el objeto se pueda clonar
    public function __clone()
    {
 
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
 
    }
 
}