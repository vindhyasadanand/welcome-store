<?php session_start(); ?>
<!DOCTYPE>
<html>

	<head>

		<style>

			
			.columna {
    float: left;
    width: 32.847%;
    
    border-style:groove;
        }
.rowa::before {
    content: "";
    clear: both;
    
    display: table;
    table-layout: 100px 500px;
}
.feedback {
  background-color : green;
  color: black;
  font-size:30px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: -4px;
  right: 10px;
}

		</style>


	</head>

	<body style="background-image:url('w11.jpg');background-repeat:no-repeat;background-size:2000px 930px;">
<form method="post" action="img2.php">
		<button type="submit" style="background:brown;color:white;height:30px;width:70px;">BACK</button>
		</form>
		
		<form method="post" action="dummycart.php">

			

				

				

				<?php

				$db = mysqli_connect('localhost', 'root', '', 'demo');

				//$rest_id = $_GET["id"];


				$sql = "SELECT  pid, productname, price ,ipname FROM product WHERE categoryid='3'";
				$result = mysqli_query($db, $sql);


				if(mysqli_num_rows($result) > 0)
				{
					//echo "<table >";
					while( $row = mysqli_fetch_assoc($result))
					{
						echo "<div>
						
                         <div class='columna'><center><img src='".$row['ipname']."' height=333px width=333px /></center>
						 <div class='rowa' style='font-size:30px;'><center>". $row["productname"]. "</center></div>
						 <div  style='font-size:30px;'><center>Rs. ". $row["price"] ."</center></div>
						 <center><input type='checkbox' style='height:20px;width:20px;' name='items[]'value=".$row["pid"]." >ADD TO CART</center>
						 
						</div>
						 </div>";
					}
					//echo "</table>";
				}
				else
				{
					echo "0 results";
				}


				?>
				<div id="mybutton">
				<center><button type="submit" class="feedback" name="proceed" >Proceed</button></center>

               </div>
				
				
				
			


			


			
		</form>




		

		


	</body>

</html>