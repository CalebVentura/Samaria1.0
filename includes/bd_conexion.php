 <?php 
	$conn = new mysqli('localhost','root','123456','samariadb');
	$conn->query("SET NAMES 'utf8' ");
	if ($conn->connect_errno) {
		echo "fallo en la conexion";
	}
 ?>

