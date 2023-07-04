
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
  table{border: none;}
  td{text-align: center; padding-top: 10px;padding-right: 10px;}
  tr{padding: 5px;}
  .row{padding-top: 40px;}
  p{margin-left:10px; margin-right: 10px;}
  body{background-color:whitesmoke;}
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



  .header{
  display:inline;
  align-items:right;
  justify-content: space-between;
  position: fixed;
  top:0; left:0; right:0;
  padding:25px;
  background: darkgray;
  box-shadow: #000;

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
    float:inline-start;  
    display:inline-flexbox;
    color: gray;
    text-decoration: none;
    font-size: 15px;
    
  }

  .header a:hover {
    
    color: white;
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
    background-color: rgb(47, 47, 47); /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 16px; /* Some padding */
    font-size: 16px; /* Set a font size */
    cursor: pointer;}

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
button:hover {
  background-color: #555555;
  color:white;
}
input{border-radius:10px;
}

.blink {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>

<html>
<title>NFT home</title>
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>



    <nav class="navbar">
    <span style="padding:0px"><img src="logo.png" height="50px"  width="80px" onclick="href:home.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="text" placeholder="Search items, collections and accounts">

    &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;
        
        
        <a href="market.php">EXPLORE</a>
        <a href="profile.php">CREATE</a>
        &emsp;&emsp;&ensp;
        <div class="dropdown">
        <span style="font-size: 20px;">Hello, <?php echo $row["name"]; ?> !</span>
            <div class="dropdown-content">
              <a href="profile.php"> Profile</a>
              <a href="logout.php" onclick="alert('Logged out successfully')"> Log out </a>
            </div>
        </div>
        

        
    </nav>


</header> 

<br>
<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>


<body>
    
   <center><p><span style="font-size:50px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-left: 10px;"> Explore, collect and sell NFTs </span></p></center>
   <br>
   <br>
   <br>
   <br>
   <class>
   <p><span style="font-size:28px;margin-left: 60px;">Top NFT collections</p></span>
<center>
   <table border="0">
    
    <tr>
        <td class="row"><a href="market.php"><img src="https://admin.nft-stats.com/assets/9318776f-aaad-4eb1-8a69-ebefacfb4f69?width=600&height=600&fit=inside" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="https://openseauserdata.com/files/2ddf0b3e6e7a06cacddd1c2a3439b251.svg" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="https://i.seadn.io/gcs/files/8df17a4820164e17cf825ce876eaba8e.png?w=500&auto=format" width="350px" height="200px"></a></td>
    </tr>

    </table></center>
</class>


<br>
<br>
<br>
<br>

<center><p class="blink"><span style="font-size:20px;">Live and upcoming AUCTIONS</span></p>
    <br>
<a href="market.php"><button class="btn">Explore market place</button></a></center>

<br>
<br>
<br>
<br>  
   <p><span style="font-size:28px;margin-left: 60px;">Browse by Category</span></p>
<center>
   <table border="0">
    
    <tr>
        <td class="row"><a href="market.php"><img src="art.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="music.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="photography-category.webp" width="350px" height="200px"></a></td>
    </tr>
    <tr>
        <td><a href="market.php">ART</a></td>
        <td><a href="market.php">MUSIC</a></td>
        <td><a href="market.php">PHOTOGRAPHY</a></td>
    </tr>
    <tr>
        <td class="row"><a href="market.php"><img src="collectibles.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="trading-cards.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="utility.webp" width="350px" height="200px"></a></td>
    </tr>
    <tr>
        <td><a href="market.php">COLLECTIBLES</a></td>
        <td><a href="market.php">TRADING CARDSS</a></td>
        <td><a href="market.php">UTILITY</a></td>
    <tr>
        <td class="row"><a href="market.php"><img src="domain-names.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="sports.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="market.php"><img src="virtual-worlds.webp" width="350px" height="200px"></a></td>
    </tr>
    <tr>
        <td><a href="market.php">DOMAIN NAMES</a></td>
        <td><a href="market.php">SPORTS</a></td>
        <td><a href="market.php">VIRTUAL WORLDS</a></td>
        
    </tr>
   </table>
   <br>
   <br>
   <br>
   <br>
   <br>
</body></center>


</html>
