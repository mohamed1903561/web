<?php
    
    session_start();
        $con=mysqli_connect('localhost','root','','hiking');
        if(isset($_POST['UPDATE'])){
            $query="UPDATE hiker SET firstname='".$_POST['name']."', email='".$_POST['email']."', pwd='".$_POST['pwd']."', address='".$_POST['address']."'where id=4";
            $result = mysqli_query($con,$query);
            if($result){
       $_SESSION['update']="data updated successfully";
              // header("Location:editp.php");
            }
            else{
                $_SESSION['update']="Not updated";
              //  header("Location:editp.php");
                
            }
        }
?>