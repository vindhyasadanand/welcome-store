<html>
<head>
<title>Online shopping</title>
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">



<style>

ul {
  margin-left: 0%;
  margin-right: 0%;
  margin-top: 0%;
  list-style-type: none;
  margin: 0;
  padding: 0;
  top: 0;
  width: 100%;
  background-color:pink;
  position: fixed;
    top:180px;
    z-index: 10;
}

li {
  float: left;
}

li a,
.dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover,
.motor:hover .dropbtn {
  background-color:cadetblue;
}

li.motor {
  display: inline-block;
}

.motor-cycle {
  display: none;
  position: absolute;
  background-color:gray;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.motor-cycle a {
  color: black;
  padding: 12px 50px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.motor-cycle a:hover {
  background-color:beige;
}

.motor:hover .motor-cycle {
  display: block;
}
.column {
    float: center;
    width: 33.33%;
    padding: 10px;
    background-color: gray;
    height: 100px;
}

.column a {
    float: none;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color:burlywood;
}
.column
{
    width: 100%;
}
 
.mySlides {
    display: none;
    }

.cart-item-image {
	width: 300px;
    height: 280px;
    display:inline;
    border: #E0E0E0 1px solid;
    padding: 5px;
    vertical-align: middle;
    margin-right: 15px;
}
.columna {
    float: left;
    width: 32.847%;
    
    border-style:groove;
}

/* Clearfix (clear floats) */
.rowa::before {
    content: "";
    clear: both;
    
    display: table;
    table-layout: 100px 500px;
}</style>
</head>
<body style="background-image: url('image/wall.jpg');overflow-y:hidden;">
<div style="width:100%;height:180px;position:fixed;top:0px;background-image:url(image/o2.jpg);background-repeat:no-repeat;background-size:1800px 200px;">
<h1 style="font-family: 'Exo', sans-serif;color:crimson;font-size:50px;padding-top:10px;"><center>ONLINE SHOPPING</h1>
</div>

<div style="position:relative;bottom:50px;">
<ul>
    <li style="font-size: 25px"><a href="shome.html"><b>HOME</b></a></li>
    <li ><a href="mycart.php"><img src="cart.png" style="width:60px;height:30px;"></a></li>
	<form method="post" action="logout1.php">
	<button type="submit" name="logout" style="float:right;position:relative;top:20px;right:50px;font-size:25px;background-color:pink;border:none;"><b>LOGOUT</b></button></form>
	
  </ul>
  </div>
<div style="position:relative;top:200px;">
<!--<center><h1 style="color:brown;">CHOOSE CATEGORIES</h1></center>-->
<br></br>
<div class="columna" style="background-color:black;">
<div class="rowa" style="background-color: black;">

	
	
<figure>
<a href="index2.php"  style="text-decoration:none;"><img src="image/footwear1.jpg" class="cart-item-image"  style="position:relative;left:80px;"/>
		
		<center><figcaption style="font-size:30px;color:crimson;">FOOTWEARS</figcaption></center>
		</div></a>
		</figure>
		</div>
		<div class="columna" style="background-color: black;">
	
	
<figure>
<a href="dummy.php" style="text-decoration:none;"><img src="image/clothes.jpg" class="cart-item-image" style="position:relative;left:80px;" />
		
		<center><figcaption style="font-size:30px;color:crimson;">FASHION</figcaption></center>
		</div></a>
		</figure>
		</div>
<div class="columna" style="background-color: black;position:relative;top:200px;">
	
	
<figure>
<a href="index3.php" style="text-decoration:none;"><img src="image/electronics.jpg" class="cart-item-image" style="position:relative;left:80px;"  />
		
		<center><figcaption style="font-size:30px;color:crimson;">ELECTRONICS</figcaption></center>
		</div></a>
		</figure>
		</div>




</div>	
</body>
</html>