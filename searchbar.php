<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

</style>

        <script>
        
            
              var Arr = [];
              
              function addElement()
              {
                   
                  var txt = document.getElementById('txt').value;
                
                  Arr.push(txt);
                
                  document.getElementById('pgh').innerHTML = Arr;
              }
              
              function DeleteElement()
              {
            
                   var txt = document.getElementById('txt').value;
                   
                   var index = Arr.indexOf(txt);
                   
                   if(index !== -1 )
                   {
                       // remove(start, end)
                       Arr.splice(index,1);
                       document.getElementById('pgh').innerHTML = Arr;
                   }
                   
                   else{
                       alert("Not Found");
                   }
              }
         
        </script>

    </head>
    <body>
        
        <?php
        $con=mysqli_connect('localhost','root','','hiking');
        if(isset($_GET['txt'])){
            $values = $_GET['txt'];
            $query = "SELECT * FROM shop WHERE CONCAT(name) Like (('%$values%')) ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0){
                foreach($result as $row){
                echo "name : ".$row['name']."<br>";
                echo " id : ".$row['id']."<br>";
                echo " price : ".$row['price']."<br>";
                echo " photo : ".$row['photo']."<br>";
                echo " quantity : ".$row['quantity']."<br>";
                echo " description : ".$row['desciption'];    
                }
            }
            else {
                echo"no record found";
            }
        }
        ?>
        
        <form  class="example" action="#" style="margin:auto;max-width:300px">
        <input   type="text" name="txt" id="txt">
        <button type="submit"><i class="fa fa-search"></i></button>
        <p id="pgh"></p>

        <button onclick="addElement();">Add</button>
        <button onclick="DeleteElement();">Delete</button>
            
        </form>
        <script>
                      document.getElementById('pgh').innerHTML = Arr;
        
        </script>

    </body>
</html>