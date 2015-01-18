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
session_start();

if(isset($_SESSION['usuario'])){
?>
<html>
<?php //require("../config/config.php"); ?>
<?php include("meta.php"); ?>
<title>..:: Apollus! Business CRM ::..</title>
<?php include("javascript.php");?>
<?php include("css.php");?>
<?php include("body.php");?>
<?php include("footer.php");?>

</html>
<?php }else{
	header("Location:login.php");
}
?>