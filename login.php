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

require_once 'class/class.login.php';
$nuevoSingleton = Login::singleton_login();
 
if(isset($_POST['nick'])){
    $nick = $_POST['nick'];
    $password = $_POST['password'];
    //accedemos al método usuarios y los mostramos
    $usuario = $nuevoSingleton->login_users($nick,$password);
    
    if($usuario == TRUE){
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
       <meta charset="utf-8" />
    <title>..:: Apollus! | Login ::..</title>
    <style type="text/css">
        body{
            background: #d1e0e5;
        }
        .content{
             margin: 0 auto;
             width: 500px;
             height: 300px;
             margin-top: 9%;
             background: #000;
             color: #fff;
             border: 6px solid #337AB7;
             border-radius: 20px;
        }
        label{
            display: block;
        }
        .caja_login{
            margin: 30px 0px 0px 70px;
        }
        .caja_login input[type=text],input[type=password]{
            width: 280px;
            padding: 8px 6px;
            border-radius: 8px;
        }
        .caja_login input[type=submit]{
            padding: 5px 60px;
            text-align: center;
            border-radius: 4px;
            color: #fff;
            background: #337AB7;
            border: 1px solid #fff;
            margin-top: 10px;
        }
    </style>
</head>
 
<body>
<div class="content">
    <div class="caja_login">
    <h2>Login</h2>
    <form class="form" action="login.php" method="post">
        
        <label>Usuario:</label>
        <input type="text" name="nick" required="true" placeholder="Introduce tu usuario" />
        
        <label>Password:</label>
        <input type="password" name="password" required="true" placeholder="Introduce tu password" />
        
        <input type="submit" value="Login" />
        
    </form>
    </div>
</div>
</body>
</html>