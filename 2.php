<?php
$servername="localhost";
$username="root";
$password="";
$dbname="roshan";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

$sql= "INSERT INTO `roshan`( `email`, `password`, `confirm_password`) VALUES ('$email','$password','$confirm_password')";
mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <style>
  .box{
    
    box-sizing: border-box; 
    border: 5px solid black;
    border-radius: 25px;
    width: 50%;
   margin-left: 250px;
   background-color: white;
   margin-top: 205px
  }
  body{
    background-color:skyblue;

  }
 
  .form{
   border: none;
   border-bottom: 1px solid black;
   height: 25px;
  }
 #submit{
  margin-top: 25px;
  margin-bottom: 25px;
  background-color: orange;
 border-radius: 25px;
  width: 100%;
  border-color: orange;
  font-weight: bold;
  height: 25px;
 }
 p{
font-weight: bold;
 }
 </style>
</head>
<body>
 
  <div class="box"> 
<h1><center> Login Form</h1></center>

<form  method="post" name="myform" action="2.php" onsubmit="return r()">
 <p>Email <br>
<input type="text" name="email"  class="form" required><br>
<p>Password   <br>
<input type="password" name="password" class="form" required><br>
<p>Confirm Password <br>
  <input type="password" name="confirm_password" class="form" required><br>

  <input type="submit"  id="submit" value="Login" ></form>
</div>


<script>
    function r(){
        let a = document.forms["myform"]["password"].value;
        let b = document.forms["myform"]["confirm_password"].value;
        if (a != b) {
            alert("Password and Confirm Password should be same");
            return false;
        }
    }
</script>
</body>
</html>