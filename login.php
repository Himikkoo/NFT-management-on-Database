<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM celebrities WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>

<!DOCTYPE html>
<style>

  body{
    margin: 50px;
  }
  body{background-image:url("plasma-turbulence-web-background-bw.jpg");
  background-repeat: no-repeat;background-size: cover;}
  td,tr{padding: 30px;}
  td{border:none}
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
*{font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}
.form input{background-color:rgb(215, 215, 215);}

button:hover{
  background-color: #555555;
  color:black;
}

</style>
<html lang="en" dir="ltr">
  <head>
    <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('rhi4y4ihsmew');
</script>
<!-- End of Async Drift Code -->

    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <center>
      <table>
        <tr>
          <td>
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.nuhj7Xd4kXE-fezctJ7yTAHaEY%26pid%3DApi&f=1&ipt=40f388fed223097dfceea621b361cc053bfc51c48d56b60985c96b34b27fa0cc&ipo=images">
          </td>
          <td>
            <center><h2>LOGIN</h2></center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="usernameemail">Username or Email &ensp;&ensp;:&ensp;&ensp; </label>
            <input type="text" name="usernameemail" id = "usernameemail" required value=""> 
            <br>
            <br>
            <label for="password">Password &ensp;&ensp;&emsp;&emsp;&emsp;&emsp;:&ensp;&ensp; </label>
            <input type="password" name="password" id = "password" required value=""> 
            <br>
            <br>
            <br>
            <br>
            <center><button type="submit" name="submit">Login</button>
            <br>
            <br>
            <p style="color:black;">Dont have an account ? <br><a   style="color:black" href="registration.php">Sign up</a></p></center>
            </form>
            <br>
          </td>
          
        </tr>
      </table>
    </center>
  </body>
</html>
