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

if(isset($_SESSION['user'])){ ?>
    
    <html>
	<?php include("template/meta.php"); ?>
	<title>BIG BUSINESS</title>
	<?php include("template/javascript.php");?>
	<?php include("template/css.php");?>
	<?php include("template/body.php");?>
	<?php include("template/footer.php");?>
	</html>
<?php
   
}else{
    header("Location: login.php");
}
?>