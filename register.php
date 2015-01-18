<?php 

session_start();

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
?>
    
    <?php
    	include('frontend/template/meta.php');
		include ('frontend/template/css.php');
		include ('frontend/template/javascript.php');
		include ('frontend/template/ico.php'); 
	?>

	 <!-- Le styles -->   
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

  </head>

  <body>

   
    <div class="container">
    	<form class="form-signin">
        	<h2 class="form-signin-heading">Registrarse</h2>
        	<input type="text" class="input-block-level" placeholder="Nombre">
       		<input type="text" class="input-block-level" placeholder="Apellido">
        	<input type="text" class="input-block-level" placeholder="Email">
        	<input type="password" class="input-block-level" placeholder="Password">
        	<label class="checkbox">
          	<input type="checkbox" value="remember-me"> Recordarme
        	</label>
        	<button class="btn btn-large btn-primary" type="submit">Crear cuenta</button>
      </form>      
      
      <hr>

      <?php include ('frontend/template/footer.php'); ?>

    </div> <!-- /container -->

   <?php include ('frontend/template/javascript2.php'); ?>

  </body>
  </html>
