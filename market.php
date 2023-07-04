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
?>

<style>

table{border: none;font-weight:normal;width: 60%;}
td{padding-top: 10px;padding-right: 10px;}
tr{padding: 5px;}
.row{padding-top: 40px;}

*{
    color: #000;
    margin:0; padding:0;
    box-sizing: border-box;
    transition:all .2s linear;
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
    font-weight: bold;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
input{border-radius:10px;
}

.header{
  display:inline;
  align-items:right;
  justify-content: space-between;
  position: fixed;
  top:0; left:0; right:0;
  padding:25px;
  background: darkgray;

  }

  .header .navbar a{
  margin-right: 10px;
  margin-left: 25px;
  font-size: 18px;
  color:var(--black);
  }


  .header .logo{
  font-size: 30px;
  color:var(--black);
  font-weight: bold;
  }


  .info{
  color: #000;
  }


  .header a {
  float: inline-start;  
  display:inline-flexbox;
  color: black;
  text-decoration: none;
  font-size: 15px;

  
}

.header a:hover {
  color:gainsboro;
}

.header a.active {
  background-color: #2196F3;
  color: white;
}

  .header input[type=text] {
    
    width: 30%;
    padding: 10px;
    border:solid;
    background-color:rgb(215, 215, 215);
    border:rgb(96, 95, 95);
    font-size: 18px;
    margin-right: 5px;
    margin-left: 5px;
  }

  .btn {
    background-color:gray; /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 16px; /* Some padding */
    font-size: 16px; /* Set a font size */
    cursor: pointer;}

  .btn:hover{
    background-color: darkgray;
    color: #000;
  }

  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position:absolute;
  align-self: start;
  background-color: lightgray;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 10px 10px;
  z-index: 1;
  font-size: 10px;
}

.dropdown-content a{
  font-size: medium;
  line-height: 35px;
}

.dropdown:hover .dropdown-content {
  display: block;

}

iframe{
  height: 100%;
}
.show {
  display: block;
}
.container {
  margin-top: 20px;
  overflow: hidden;
}

.table2{border: groove;text-align: center;padding:0px;font-weight:lighter;width:80%;margin-bottom: 30px;}
.table2 td{padding: 10px;}
.table2 tr{padding: 10px;border:groove;}
th{padding: 20px;}

button{background-color:lightgray;}
    button:hover{
        color: white;
        background-color: gray;
    }

</style>


<html>
  <title>Explore</title>
  <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>
      <nav class="navbar">
        <span style="padding:0px"><img src="logo.png" height="50px"  width="80px" onclick="href:home.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  
        <input type="text" placeholder="Search items, collections and accounts">
        &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;
        <a href="market.php">EXPLORE</a>
        <a href="sell.php">CREATE</a>
        &emsp;&emsp;&ensp;
        <div class="dropdown">
          <span style="font-size: 20px;">Hello, <?php echo $row["name"]; ?> !</span>
              <div class="dropdown-content">
                <a href="profile.php"> Profile</a>
                <a href="logout.php"> Log out </a>
              </div>
        </div>    
      </nav>
  </header> 

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <body>
      <p><span style="font-size:30px;margin-left: 40px;">Explore market place</p></span>
      <br>
      <br>
      <center>
      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('arts')"> Arts</button>
        <button class="btn" onclick="filterSelection('music')"> Music</button>
        <button class="btn" onclick="filterSelection('photography')"> Photography</button>
        <button class="btn" onclick="filterSelection('trading cards')"> Trading cards</button>
      </div>
      <br>
  
      </table>
      <table border="1">
        <form method="post">
          <tr>
              <td class="row music"><a href=""><img src="nft1.webp"><img src="nft11.webp"></a></td>
              <td class="row arts"><a href=""><img src="nft2.webp"><img src="nft22.webp" ></a></td>
              <td class="row photography"><a href=""><img src="nft3.webp"><img src="nft33.webp" ></a></td>
          </tr>
          <tr>
              <td class="row music"><a href="">Oxymons.xyz<br><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> starting bids : </span> <br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> Ends in :  </span></a><br><br><button type="submit" name="submita" value='submita' style="width:90%;">BUY</td>
              <td class="row arts"><a href="">Cryptockitties<br><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> starting bids : </span><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> Ends in :  </span></a><br><br><button type="submit" name="submitb" value='submitb' style="width:90%;">BUY</button></td>
              <td class="row photography"><a href="">Cool Cats<br><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> starting bids : </span><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> Ends in :  </span></a><br><br><button type="submit" name="submitc" value='submitc' style="width:90%;">BUY</button></td>
          </tr>
          <tr>
              <td class="row"><a href=""><img src="nft4.webp"><img src="nft44.webp"></a></td>
              <td class="row"><a href=""><img src="nft5.webp"><img src="nft55.webp"></a></td>
              <td class="row"><a href=""><img src="nft6.webp"><img src="nft66.webp"></a></td>
              
          </tr>
          <tr>
              <td><a href="">Beanz<br><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> starting bids : </span><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> Ends in :  </span></a><br><br><button type="submit" name="submitd" value='submitd' style="width:90%;">BUY</button></td>
              <td><a href="">CryptoDickbutts S3<br><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> starting bids : </span><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> Ends in :  </span></a><br><br><button type="submite" name="submite" value="submite" style="width:90%;">BUY</button></td>
              <td><a href="">CloneX<br><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> starting bids : </span><br><span style="font-size: 14px;margin-top: 3px;color: darkgray;"> Ends in :  </span></a><br><br><button type="submit" name="submitf" value='submitf' style="width:90%;">BUY</button></td>
          </tr>
              
          </tr>
          <br>
          <br> </form>     
        </table></center>
        <br>
      <br>
      <br>
      <br>
      <br>
      <p><span style="font-size:25px;margin-left: 150px;">ONGOING AUCTIONS</p></span>
      <br>
      <br>
      <br>
        <center><table class="table2" border="1px">
          <form method="post>"
      <tr><h2>
            <th>Asset id</th>
            <th>collection id</th>
            <th>name</th>
            <th>type</th>
            <th>URL</th>
            <th>auction type</th>
            <th>time</th>
            <th>price</th>
            <th></th></h2>
      </tr>
      <?php
        $duplicate = mysqli_query($conn, "SELECT asset_id, collection_id, price, auction_type, time FROM sales");
        $row = mysqli_fetch_assoc($duplicate);            
                if(mysqli_num_rows($duplicate) > 0){
                    while($row = mysqli_fetch_array($duplicate)){
                        echo "<tr>";
                        echo "<td>".$row['asset_id']."</td>
                        <td>".$row['collection_id']."</td>";
                        $cole=$row['collection_id'];
                        $coll = mysqli_query($conn, "SELECT * FROM collection WHERE collection_id ='$cole'");
                        $row1 = mysqli_fetch_assoc($coll);
                        echo "<td>".$row1['name']."</td>
                        <td>".$row1['type']."</td>
                        <td>".$row1['url']."</td>
                        <td>".$row['auction_type']."</td>
                        <td>".$row['time']."</td>
                        <td>".$row['price']."</td>
                        <td><br><input type='submit' name='BUY' value='BUY'/></td>
                        </tr>";

            }
            echo "</form></table>";}

                    
        if(array_key_exists('BUY',$_POST)){
          echo "<script> alert('Buyed successfully'); </script>";
          $coll = mysqli_query($conn, "SELECT * FROM collection WHERE collection_id ='$row[collection_id]'");
          $r = mysqli_fetch_assoc($coll);
          $update = "UPDATE collection SET id='$id' WHERE collection_id = $r[collection_id]";
          mysqli_query($conn, $update);
          if ($conn->query($update) === TRUE){
            echo "<script> alert('Buyed successfully'); </script>";}
          
          $que = "DELETE FROM sales WHERE collection_id=$r[collection_id]";
          mysqli_query($conn, $que);
        }
          if(array_key_exists('submita',$_POST)){
            $quer = "INSERT INTO collection (id, collection_id, name, url, type) VALUES('$id','','Oxymons.Xyz','http://localhost/NFT/nft1.webp','Drawings')";
            if ($conn->query($quer) === TRUE) {
              echo "<script> alert('Buyed successfully'); </script>";}}

          if(array_key_exists('submitb',$_POST)){
            $quer = "INSERT INTO collection (id, collection_id, name, url, type) VALUES('$id','','Cryptokitties','http://localhost/NFT/nft1.webp','Music')";
            if ($conn->query($quer) === TRUE) {
              echo "<script> alert('Buyed successfully'); </script>";;}}

          if(array_key_exists('submitc',$_POST)){
            $quer = "INSERT INTO collection (id, collection_id, name, url, type) VALUES('$id','','CoolCats','http://localhost/NFT/nft1.webp','Photography')";
            if ($conn->query($quer) === TRUE) {
              echo "<script> alert('Buyed successfully'); </script>";;}}

          if(array_key_exists('submitd',$_POST)){
            $quer = "INSERT INTO collection (id, collection_id, name, url, type) VALUES('$id','','Beanz','http://localhost/NFT/nft1.webp','Drawings')";
            if ($conn->query($quer) === TRUE) {
              echo "<script> alert('Buyed successfully'); </script>";;}}

          if(array_key_exists('submite',$_POST)){
            $quer = "INSERT INTO collection (id, collection_id, name, url, type) VALUES('$id','','CryptoDickbutt S3','http://localhost/NFT/nft1.webp','Collectibles')";
            if ($conn->query($quer) === TRUE) {
              echo "<script> alert('Buyed successfully'); </script>";;}}

          if(array_key_exists('submitf',$_POST)){
            $quer = "INSERT INTO collection (id, collection_id, name, url, type) VALUES('$id','','CloneX','http://localhost/NFT/nft1.webp','Utility')";
            if ($conn->query($quer) === TRUE) {
              echo "<script> alert('Buyed successfully'); </script>";;}}

          ?>
      </center>
      </bod,'$row[collection_id]',y>
</html'$id'>