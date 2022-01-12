<?php

	$con=mysqli_connect('localhost','root','','hiking');
if(!$con)
	echo"error conneting to db";
		$sql="INSERT INTO emp(firstname,lastname,pwd,email,age,gender,id,mobile,photo,type,ssn,address,salary) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['pwd']."','".$_POST['email']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['id']."','".$_POST['mobile']."','".$_POST['photo']."','".$_POST['type']."','".$_POST['ssn']."','".$_POST['address']."','".$_POST['salary']."')"
$result = mysqli_query($con,$sql);
		if($result)
			echo "record inserted";
		else{
			echo "Error:".$sql."<br>".$con->error;

		}
		$con->close();
	
?>
