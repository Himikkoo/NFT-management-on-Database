

<style>
table{border: none;color: #000;}
td{text-align: center; padding-top: 10px;padding-right: 10px;color: #000;}
tr{padding: 5px;color: #000;}
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
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}



.header{
display:inline;
align-items:right;
justify-content: space-between;
position: fixed;
top:0; left:0; right:0;
padding:25px;
background:darkgray;

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
  background-color: rgb(47, 47, 47);      
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer;}
button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white;
  color: black;
  border: 2px solid #555555;
}


button:hover {
  background-color: #555555;
  color:white;
}
input{border-radius:10px;
}

.blink {
  animation: blinker 1s linear infinite;
  position:initial;
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
    &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;

        <a href="#" onclick="alert('Sign in to explore')">EXPLORE</a>
        <a href="#" onclick="alert('Sign in to an account')">CREATE</a>
        &emsp;&emsp;

        <a href="login.php"><button id="button" type="button">Sign in</button></a>
        

        
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
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="https://admin.nft-stats.com/assets/9318776f-aaad-4eb1-8a69-ebefacfb4f69?width=600&height=600&fit=inside" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="https://openseauserdata.com/files/2ddf0b3e6e7a06cacddd1c2a3439b251.svg" width="350px" height="200px"></a></td>
        <td class="row"><a href=""onclick="alert('Sign in to explore')"><img src="https://i.seadn.io/gcs/files/8df17a4820164e17cf825ce876eaba8e.png?w=500&auto=format" width="350px" height="200px"></a></td>
    </tr>

    </table></center>
</class>


<br>
<br>
<br>
<br>

<center><p class="blink"><span style="font-size:20px;">Live and upcoming AUCTIONS</span></p>
    <br>
<a href="#" onclick="alert('Sign in to explore')"><button class="btn">Explore market place</button></a></center>

<br>
<br>
<br>
<br>  
   <p><span style="font-size:28px;margin-left: 60px;">Browse by Category</span></p>
<center>
   <table border="0">
    
    <tr>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="art.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="music.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="photography-category.webp" width="350px" height="200px"></a></td>
    </tr>
    <tr>
        <td><a href="" onclick="alert('Sign in to explore')">ART</a></td>
        <td><a href="" onclick="alert('Sign in to explore')">MUSIC</a></td>
        <td><a href="" onclick="alert('Sign in to explore')">PHOTOGRAPHY</a></td>
    </tr>
    <tr>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="collectibles.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="trading-cards.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="utility.webp" width="350px" height="200px"></a></td>
    </tr>
    <tr>
        <td><a href="" onclick="alert('Sign in to explore')">COLLECTIBLES</a></td>
        <td><a href="" onclick="alert('Sign in to explore')">TRADING CARDSS</a></td>
        <td><a href="" onclick="alert('Sign in to explore')">UTILITY</a></td>
    <tr>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="domain-names.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="sports.webp" width="350px" height="200px"></a></td>
        <td class="row"><a href="" onclick="alert('Sign in to explore')"><img src="virtual-worlds.webp" width="350px" height="200px"></a></td>
    </tr>
    <tr>
        <td><a href="" onclick="alert('Sign in to explore')">DOMAIN NAMES</a></td>
        <td><a href="" onclick="alert('Sign in to explore')">SPORTS</a></td>
        <td><a href="" onclick="alert('Sign in to explore')">VIRTUAL WORLDS</a></td>
        
    </tr>
   </table>
   <br>
   <br>
   <br>
   <br>
   <br>
</body></center>


</html>
