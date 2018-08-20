 <?php 
	$conn = new mysqli('localhost','root','123456','samariadb');
	if ($conn->connect_errno) {
		echo "fallo en la conexion";
	}
 ?>

