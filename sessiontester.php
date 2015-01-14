<?php
session_start();

$_SESSION['tiempo']=time();
echo $_SESSION['user']."<br>";
echo $_SESSION['name_user']."<br>";

/*session_unset();
session_destroy();
echo $_SESSION['usuario'];  //Darán error ya que ha sido eliminado el vector $_SESSION
echo $_SESSION['tiempo'];*/




?>