<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

require ("database/connection.php");
if (isset($_POST['submit'])) {
    

    $name = $_POST['E_name'];
    $url = $_POST['E_url'];
   

	$query = "INSERT into Education (name, url) values('$name', '$url')";
   
	mysqli_query($conn,$query);
            
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="" method="post">
		<h5>Education Name:</h5>
		<input type="text" name="E_name">
		<h5>Education url:</h5>
		<input type="text" name="E_url"><br><br>
		<input type="submit" name="submit"><br><br>
	</form>
 <table style="width: 40%; border: 1px solid black;">
 <tr>
  <th>Id</th> 
  <th>name</th> 
  <th>url</th>
 </tr>
 <?php
 
require 'database/connection.php';
$sql = "SELECT * FROM Education";
$res = mysqli_query($conn, $sql);
  if (mysqli_num_rows($res)>0) {
  while ($newArray = mysqli_fetch_array($res,MYSQLI_ASSOC)){
    echo "<tr><td>" . $newArray["id"]. "</td><td>" . $newArray["name"] . "</td><td>"
. $newArray["url"]. "</td></tr>";
}
echo "</table>";
}
	else{
		echo"no data";
	}

?>
</body>
</html>
