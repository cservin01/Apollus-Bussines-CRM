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

<?php //require("../config/config.php"); ?>
<?php include("template/meta.php"); ?>
<title>..:: Apollus! | Project ::..</title>
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
				        <h1 class="page-header">Project <small>CRM</small></h1>
				        	<ol class="breadcrumb">
				            	<li><i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a></li>
				                <li class="active"><i class="fa fa-file"></i> Project</li>
				            </ol>
				         </div>
			     	</div>
			     <!-- /.row -->
				</div>
				<script type="text/javascript" src="js/project/testdata.js"></script>
				<div id="gantt_here" style='width:100%; height:100%; min-height: 500px;'></div>
				<script type="text/javascript">
			        var tasks =  {
			            data:[
			                {id:1, text:"Project #2", start_date:"01-04-2013", duration:18,order:10,
			                    progress:0.4, open: true},
			                {id:2, text:"Task #1", 	  start_date:"02-04-2013", duration:8, order:10,
			                    progress:0.6, parent:1},
			                {id:3, text:"Task #2",    start_date:"11-04-2013", duration:8, order:20,
			                    progress:0.6, parent:1}
			            ],
			                    links:[
			            { id:1, source:1, target:2, type:"1"},
			            { id:2, source:2, target:3, type:"0"},
			            { id:3, source:3, target:4, type:"0"},
			            { id:4, source:2, target:5, type:"2"},
			        ]
			        };
			
					gantt.init("gantt_here");
			
			
					gantt.parse(tasks);
			
				</script>
			<!-- /.container-fluid -->
			</div>
		<!-- /#wrapper -->
    	</div>

<?php include("template/footer.php");?>
</body>
</html>
<?php }else{
	header("Location:login.php");
}
?>
