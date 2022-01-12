<?php

	$con=mysqli_connect('localhost','root','','hiking');
if(!$con)
	echo"error conneting to db";
		$sql="INSERT INTO groups(name,location,timeslot,capacity,price,avgrating,id) values('".$_POST['name']."','".$_POST['location']."','".$_POST['time']."','".$_POST['capacity']."','".$_POST['price']."',1,1)";
$result = mysqli_query($con,$sql);
		if($row=mysqli_fetch_array($result))
			echo "record inserted";
		else{
			echo "Error:".$sql."<br>".$con->error;

		}
		$con->close();
	



?>