<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'cse_185';
		$conn = mysqli_connect($host,$user,$pass,$dbname);
	if(!$conn){
		die('Could not connect:'.mysqli_connect_error());
	}
	echo 'IT IS CONNECTED :) <br/>';
	$name = $_POST["name"];
	$dept = $_POST["dept"];
	echo $name.$dept;
	$sql = "INSERT INTO formInfo(name,department) VALUES('$name','$dept')";
	if(mysqli_query($conn,$sql)){
		echo"</br> Details stored in table haha </br> ";
	}else{
		echo "Not inserted ;(".mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>
