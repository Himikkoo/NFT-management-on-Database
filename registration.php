<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST["phonenumber"];
  $DOB = $_POST["DOB"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO celebrities VALUES('','$name','$username','$email','$phone','$DOB','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<style>
body.groove{border-style: groove;padding: 5px;}
body{background-image:url("plasma-turbulence-web-background-bw.jpg");
background-repeat: no-repeat;
background-size: cover;}
*{color: black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}
td{padding: 30px;}
button {
  background-color: grey; /* Green */
  border: none;
  border-radius: 8px;
  width: 100%;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
button:hover{
  background-color: #555555;
  color:black;
}
.form input{background-color:rgb(215, 215, 215);}
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <br>
    <br>
    <br>
  <center><table><tr>
    <td>
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Ln1mA3MXm8_OIp7gL-85RAHaEK%26pid%3DApi&f=1&ipt=1092b2d2564c8ecdb853908c3383dcf0c62fb85fb707d03b81db0d9f86382872&ipo=images">
    </td>
    <td>
    <center><h2>REGISTRATION</h2></center>
            <br>
            <br>
            <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="name">Name   &ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp; :&ensp;&ensp;&ensp; </label>
            <input type="text" name="name" id = "name" required value=""> <br>
            <br>
            <label for="username">Username &ensp;&ensp;&emsp;&ensp;&emsp;&emsp;:&ensp;&ensp;&ensp; </label>
            <input type="text" name="username" id = "username" required value=""> <br>
            <br>
            <label for="email">Email &ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&ensp;: &ensp;&ensp;&ensp;</label>
            <input type="email" name="email" id = "email" required value=""> <br>
            <br>
            <label for="phonenumber">Phone no   &ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&emsp; : &ensp;&ensp;&ensp;</label>
            <input type="number" name="phonenumber" id = "phonenumber" required value="" maxlength="12"> <br>
            <br>
            <label for="DOB">DOB  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&emsp;&ensp;: &ensp;&ensp;&ensp;</label>
            <input type="date" name="DOB" id = "DOB" required value=""> <br>
            <br>
            <label for="password">Password &ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;: &ensp;&ensp;&ensp; </label>
            <input type="password" name="password" id = "password" required value=""> <br>
            <br>
            <label for="confirmpassword">Confirm Password  &emsp; : &emsp;&ensp; </label>
            <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
            <br>  
            <br>
            <br>
            <center><button type="submit" name="submit">Register</button>
            <br>
            <br>
            <p>Already have an account ?<br><a href="login.php">login</a></center></p>
            </form>
          <br>
          </td></tr></table></center>
  </body>
</html>
