<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM celebrities WHERE ID = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: home1.php");
}

if(isset($_POST["submit"])){
  $password = $_POST["password"];
  $newpassword = $_POST["newpassword"];
  $confirmnewpassword = $_POST["confirmnewpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
  $row = mysqli_fetch_assoc($duplicate);
  if(mysqli_num_rows($duplicate) > 0){
    if($password == $row['password']){
        if($newpassword == $confirmnewpassword){
            $query = "UPDATE celebrities SET password = '$newpassword' WHERE id = '$id';";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Password changed successfully'); </script>";
          }
          else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
          }
    }
    else{
      echo
      "<script>alert('Wrong password')</script>";
    }
  }
  else{
    echo
    "<script> alert('Wrong Password'); </script>";
  }
}

if(isset($_POST["nsubmit"])){
    $name = $_POST["newname"];
    $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
    $row = mysqli_fetch_assoc($duplicate);
    if(mysqli_num_rows($duplicate) > 0){
      $query = "UPDATE celebrities SET name = '$name' WHERE id = '$id';";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Name changed successfully'); </script>";}
    /*$username = $_POST["newusername"];
    $email = $_POST["newemail"];
    $phonenumber = $_POST["newphonenumber"];
    $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
    $row = mysqli_fetch_assoc($duplicate);
    if(mysqli_num_rows($duplicate) > 0){
        $query = "UPDATE celebrities SET name = '$name', username = '$username', email = '$email', phone = '$phonenumber' WHERE id = '$id'";
        echo
        "<script> alert('Details changed successfully'); </script>";
    }*/
}
if(isset($_POST["nsubmit"])){
  $name = $_POST["newname"];
  $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
  $row = mysqli_fetch_assoc($duplicate);
  if(mysqli_num_rows($duplicate) > 0){
    $query = "UPDATE celebrities SET name = '$name' WHERE id = '$id';";
    mysqli_query($conn, $query);
    echo
    "<script> alert('Name changed successfully'); </script>";}}

if(isset($_POST["usubmit"])){
    $username = $_POST["newusername"];
    $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
    $row = mysqli_fetch_assoc($duplicate);
    if(mysqli_num_rows($duplicate) > 0){
      $query = "UPDATE celebrities SET username = '$username' WHERE id = '$id';";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Username changed successfully'); </script>";}}

if(isset($_POST["esubmit"])){
    $email = $_POST["newemail"];
    $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
    $row = mysqli_fetch_assoc($duplicate);
    if(mysqli_num_rows($duplicate) > 0){
      $query = "UPDATE celebrities SET email = '$email' WHERE id = '$id';";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Email changed successfully'); </script>";}}

if(isset($_POST["psubmit"])){
    $phonenumber = $_POST["newphonenumber"];
    $duplicate = mysqli_query($conn, "SELECT * FROM celebrities WHERE id = '$id'");
    $row = mysqli_fetch_assoc($duplicate);
    if(mysqli_num_rows($duplicate) > 0){
      $query = "UPDATE celebrities SET phone = '$phonenumber' WHERE id = '$id';";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Phone number changed successfully'); </script>";}}
?>


<style>
    *{font-size: 22px;color: black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background-color: whitesmoke;}
    button{background-color:lightgray;border-radius: 8px;}
    button:hover{
        color: white;
        background-color: gray;
    }
    .btn1{font-size: 15px;border-radius: 8px;}
    input{border-radius: 8px;}
    </style>
<html>
    <title>Profile</title>
    <br>
    <center><table><tr>
    <td>
    <h1>PERSONAL INFORMATION</h1>
            <br>
            <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="name">User ID   &ensp;&ensp;&ensp;&ensp;&ensp;:&ensp;&ensp;&ensp; </label>
            <input type="text" name="id" id = "id" required value="" disabled placeholder= <?php echo $row["id"]; ?>>
            </form>
            <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="name">Name   &ensp;&ensp;&ensp;&ensp;&emsp; :&ensp;&ensp;&ensp; </label>
            <input type="text" name="newname" id = "newname" required value=""  placeholder=<?php echo $row["name"]; ?> >&emsp;<button class="btn1" type="submit" name="nsubmit" style="width:15% ;">Save</button>
            </form>
  <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="username">Username &ensp;&emsp;:&ensp;&ensp;&ensp; </label>
            <input type="text" name="newusername" id = "newusername" required value=""  placeholder=<?php echo $row["username"]; ?> >&emsp;<button class="btn1" type="submit" name="usubmit" style="width:15% ;">Save</button>
            </form>
 <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="email">Email &ensp;&ensp;&emsp;&emsp;&ensp;: &ensp;&ensp;&ensp;</label>
            <input type="email" name="newemail" id = "newemail" required value=""  placeholder=<?php echo $row["email"]; ?> >&emsp;<button class="btn1" type="submit" name="esubmit" style="width:15% ;">Save</button>
            </form>
  <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="phonenumber">Phone no   &ensp;&emsp; : &ensp;&ensp;&ensp;</label>
            <input type="number" name="newphonenumber" id = "newphonenumber" required value="" maxlength="12"  placeholder=<?php echo $row["phone"]; ?> >&emsp;<button class="btn1" type="submit" name="psubmit" style="width:15% ;">Save</button>
            </form>
    
            <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="DOB">DOB  &ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&ensp;: &ensp;&ensp;&ensp;</label>
            <input type="date" name="DOB" id = "DOB" required value="" placeholder=<?php echo $row["DOB"]; ?>><br>
            <br>
            <br>
            <br>
            </form>
            <h3>CHANGE PASSWORD<h3>
                <br>
                <br>
                <form class="form" action="" method="post" autocomplete="off">
            <label for="password">Old Password&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : &ensp;&ensp;&ensp; </label>
            <input type="password" name="password" id = "password" required value=""><br>
            <br>
            <label for="newpassword">New Password&ensp;&ensp;&ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp; : &ensp;&ensp;&ensp; </label>
            <input type="password" name="newpassword" id = "newpassword" required value=""><br>
            <br>
            <label for="confirmnewpassword">Confirm New Password&emsp;&ensp; : &emsp;&ensp; </label>
            <input type="password" name="confirmnewpassword" id = "confirmnewpassword" required value=""> <br>
            <br>  
            <br>
            <br>
            <center><button type="submit" name="submit" style="width:50%;">Change password</button>

          </td></tr></table></center>
</html>