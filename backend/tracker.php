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

if(isset($_SESSION['user'])){
?>
<html>
<?php //require("../config/config.php"); ?>
<?php include("template/meta.php"); ?>
<title>..:: Apollus! | Tracker ::..</title>
<?php include("template/javascript.php");?>
<?php include("template/css.php");?>
<body>
	<div id="wrapper">
        <?php include("template/navigation.php"); ?>
        <div id="page-wrapper">
			<div id="page-wrapper">
				<div class="container-fluid">
			    	<!-- Page Heading -->
			        <div class="row">
				        <div class="col-lg-12">
				        <h1 class="page-header">Tracker<small>System</small></h1>
				        	<ol class="breadcrumb">
				            	<li><i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a></li>
				                <li class="active"><i class="fa fa-file"></i> Blank Page</li>
				            </ol>
				         </div>
			     	</div>
			     <!-- /.row -->
				</div>
			<!-- /.container-fluid -->
			</div>
		<!-- /#wrapper -->
    	</div>
</body>
<?php include("template/footer.php");?>

</html>
<?php }else{
	header("Location:login.php");
}
?>
