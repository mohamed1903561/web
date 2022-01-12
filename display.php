<?php
$con=mysqli_connect('localhost','root','','hiking');
$query="SELECT * FROM hiker WHERE id=4";
$result = mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result))
            {

                $name     = $row['firstname'];
                $email = $row['email'];
                $pwd = $row['pwd'];
                $address = $row['address'];
            }
?>
<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="Editp.html">
</head>

<body>
	<style>
	body{
	background-color: #1c2833;
}

.box{
	box-sizing: border-box;
	width: 400px;
	height: 700px;
	border: 2px solid #3498db;
	background-color: black;
	margin-top: 70px;
}
img{
	box-sizing: border-box;
	width: 149px;
	height: 149px;
	margin: 20px;
	border: 5px solid #0082e6;
	padding: 3px;
	background-color: white;
}
input[type="text"],input[type="email"]{
	display: block;
	box-sizing: border-box;
	background: none;
	color: #3498db;
	margin-bottom: 50px;
	padding: 4px;
	width: 220px;
	height: 32px;
	border-bottom: 1px solid #0082e6;
	font-family: 'Roboto', sans-serif ;
	font-weight: 400;
	font-size: 15px;
	margin-top: 25px;
	border-bottom: 2px solid #3498db;
	border-bottom-right-radius: auto;
	color:#3498db ;
}

input[type="file"]{
	display: none;
}
label{
	box-sizing: border-box;
	font-size: 20px;
	background-color: black;
	color: white;
	border: 1px solid #3498db;
	padding: 2px 15px;
}

 <?php
if(isset($_SESSION['update'])){
echo "<h4>".$_SESSION['update']."</h4>";
unset($_SESSION['update']);
}


?>
</style>
<center>
<form action="update.php" method="post">
	<div class="box">
		<img src="hskills.jpeg"></image>
		<input type="file" name=""  id="file" accept="hskills.jpeg">
		<label for="file">EDIT PHOTO</label>
		<input type="text" name="name"  placeholder="New User Name" value="<?php echo $name ?>">
		<input type="text" name="email"  placeholder=" New Email" value="<?php echo $email ?>" >
		<input type="text" name="pwd"  placeholder=" New Password" value="<?php echo $pwd ?>">
		<input type="text" name=""  placeholder="confirm new Password">
		<input type="text" name="address"  placeholder="New Address" value="<?php echo $address ?>">
		<input type="submit" name="UPDATE" value="UPDATE" style="floot: left;margin: 10px ;">
		
	</div>
</form>
</center>
</body>
</html>