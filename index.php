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
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

  </head>

  <body>

    <?php include('frontend/template/navigation.php'); ?>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Atención a Clientes</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis metus metus, gravida sed tellus ornare, euismod venenatis lacus. Nunc aliquet ante ut ligula facilisis, in rutrum dui consequat.</p>
        <p><a href="register.php" class="btn btn-primary btn-large">Registrarse &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Clientes</h2>
          <p>Si usted es el usuario final del producto y desea atención al cliente. </p>
          <p><a class="btn" href="login.php?type=client">Ingresar &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Distribuidor</h2>
          <p>Si usted es distribuidor de nuestros productos.</p>
          <p><a class="btn" href="login.php?type=dealer">Ingresar &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Proveedor</h2>
          <p>Area de proveedores.</p>
          <p><a class="btn" href="login.php?type=prov">Ingresar &raquo;</a></p>
        </div>
      </div>

      <hr>

      <?php include ('frontend/template/footer.php'); ?>

    </div> <!-- /container -->

   <?php include ('frontend/template/javascript2.php'); ?>

  </body>
  </html>
