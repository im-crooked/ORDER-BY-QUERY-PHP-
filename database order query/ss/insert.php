<?php

include("db.php");
if(isset($_POST['submit'])) {

$name = mysqli_real_escape_string($conn,$_POST['name']);


$res = mysqli_query($conn, "INSERT INTO details ( name ) VALUES ('$name')");


if($res) {
  echo("Error description: " . mysqli_error($conn));
	header("Location: success.php");
	}
}
mysqli_close($conn);
?>



