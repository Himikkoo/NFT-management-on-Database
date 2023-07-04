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
  $assetid = $_POST["assetid"];
  $collectionid = $_POST["collectionid"];
  $price = $_POST["price"];
  $auction= $_POST["auction"];
  $time = $_POST["time"];
  $query = "INSERT INTO sales VALUES('$id','$assetid','$collectionid','$price','$auction','$time')";
  mysqli_query($conn, $query);
  echo "<script> alert('successfully selled your collection !'); </script>";
  $que= "UPDATE collection SET id=null WHERE collection_id=$collectionid";
  mysqli_query($conn, $que);
}
?>

<style>
    *{font-size: 22px;color: black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background-color: whitesmoke;}
    body{margin: 30px;}
    button{background-color:lightgray;}
    button:hover{
        color: white;
        background-color: gray;
    }
</style>
<html>
    <body>
        <div>
            <h2>SELL</h2>
            <p>Sell your works or assets you own here !</p>
            <br><br>
            <center>
                <table>
            <form class="form" action="" method="post" autocomplete="off">
            <label for="name">ID   &ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp; :&ensp;&ensp;&ensp; </label>
            <input type="number" name="name" id = "name" required value="" placeholder=<?php echo $row["id"];?> disabled> <br>
            <br>
            <label for="assetid">Asset ID &ensp;&ensp;&emsp;&ensp;&emsp;&emsp;:&ensp;&ensp;&ensp; </label>
            <input type="number" name="assetid" id = "assetid" required value=""> <br>
            <br>
            <label for="collectionid">Collection ID &ensp;&ensp;&emsp;&ensp;&ensp;: &ensp;&ensp;&ensp;</label>
            <input type="number" name="collectionid" id = "collectionid" required value=""> <br>
            <br>
            <label for="price">Price  &ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&emsp;&ensp;&ensp;&ensp;: &ensp;&ensp;&ensp;&ensp;</label>
            <input type="number" name="price" id = "price" required value="" maxlength="12"> <br>
            <br>
            <label for="auction">Auction type &ensp;&ensp;&emsp;: &ensp;&ensp;&ensp;</label>
            <input type="text" name="auction" id = "auction" required value=""> <br>
            <br>
            <label for="time">Time &ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;: &ensp;&ensp;&ensp; </label>
            <input type="time" name="time" id = "time" required value=""> <br>
            <br>
            <label>Upload Your Image &ensp;&ensp;&emsp;&ensp;&ensp;&emsp;&emsp;&emsp;&ensp;:&ensp;&ensp;&emsp;
		<input type="file" name="profile_image" />
	        </label>
            <br>
            <br>

            <br>
            <button type="submit" name="submit" style="width:40%;">Confirm sell</button>
            <br></table>
            </center>
        </div>
    </body>
</html>