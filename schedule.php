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
<title>..:: Apollus! | Profile ::..</title>
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
				        <h1 class="page-header">Agenda <small>Subheading</small></h1>
				        	<ol class="breadcrumb">
				            	<li><i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a></li>
				                <li class="active"><i class="fa fa-file"></i> Blank Page</li>
				            </ol>
				         </div>
			     	</div>
			     <!-- /.row -->
			     <style>
				#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>			     <script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2014-11-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2014-11-01'
				},
				{
					title: 'Long Event',
					start: '2014-11-07',
					end: '2014-11-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2014-11-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2014-11-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2014-11-11',
					end: '2014-11-13'
				},
				{
					title: 'Meeting',
					start: '2014-11-12T10:30:00',
					end: '2014-11-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2014-11-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2014-11-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2014-11-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2014-11-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2014-11-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2014-11-28'
				}
			]
		});
		
	});

</script>
				<div id="calendar"></div>

				</div>
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
