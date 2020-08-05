<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

$conn = mysqli_connect($host, $user, $pass, $dbname);


$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query  = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: index.html");
	//echo "Bienvenido";
}
else if ($nr == 0) 
{
	header("Location: login.html");
	//echo "No ingreso"; 
}

?>