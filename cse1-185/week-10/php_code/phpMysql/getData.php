<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname =  'cse_185';
	$conn = mysqli_connect($host,$user,$pass,$dbname);
	if(!$conn){
		die('Could not connect:'.mysqli_connect_error());
	}
	echo'Connected successfully <br/>';
	$dept = $_POST["dept"];
	$sql = "SELECT * FROM formInfo where department='$dept'";
	$retval=mysqli_query($conn,$sql);

	if(mysqli_num_rows($retval)>0){
		while($row = mysqli_fetch_assoc($retval)){
			echo "STUD NAME : {$row['name']} <br>"."STUD DEPT:{$row['department']} <br>";
		}
	}else{
		echo"no one in that department ";
	}
	mysqli_close($conn);
?>
