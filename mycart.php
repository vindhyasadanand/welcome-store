<?php session_start(); ?>
<!DOCTYPE>
<html>

	<head>

		<title>Order List</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<style>

			table
			{
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			td, th
			{
				border: 2px solid #dddddd;
				text-align: center;
				padding: 8px;
			}

			
			#topbar
			{
				border-top: 1px solid #CCCCCC;
				background-color: #BB1919;
				width: 100%;
				height: 85px;
			}
			#welcome
			{
				padding: 0;
				margin: 0;
				color: white;
				font-size: 40px;
				font-weight: normal;
				padding-top:10px;
				float: left;
				margin-left: 70px;
			}
			#whitespace
			{
				height: 30px;
			}

		</style>


	</head>

	<body style="background-image:url('w1.jpg');background-size:1900px 1200px;background-repeat:no-repeat;">

		<div id="topbar">
			<p id="welcome"><?php echo "Items In Cart: <br>"; ?></p>
		</div>

		<div id="whitespace"></div>

		<form method="post" action="update1.php">

			<div class="container">

				


				<?php

				$db = mysqli_connect('localhost', 'root', '', 'demo');

				//if(isset($_POST['proceed']))
				//{

					
				
				
					$sql = "SELECT  c.pid1, p.productname,c.ipname, c.price FROM product p, cart c WHERE p.pid=c.pid1 AND  c.custid1={$_SESSION['cust_id']}";
					$result = mysqli_query($db, $sql);


					if(mysqli_num_rows($result) > 0)
					{
						echo "<table style='border:groove;border-width:10px;'>";
					for($i=0; $row = mysqli_fetch_assoc($result); $i++)
						{
							echo "<tr style='color:yellow;font-size:25px;background:black;opacity:0.6;'><td> <img src='".$row['ipname']."' height=100px width=170px /></td><td> ". $row["productname"]. "</td><td>". $row["price"]. "</td></tr>" ;
                           // echo "<img src='".$row['ipname']."' height=30px width=170px />";
						}
						echo "</table>";
					}
					else
					{
						echo "0 results";
					}
				//}
?>
				 

				<div class="container" style="text-align:center">
					
					<br><br>
					<button type="submit" class="btn btn-primary " name="update" style="height:70px;width:150px;font-size:25px;color:black;position:relative;left:100px;"><b>Update</b></button>

				</div>

			</div>
		</form>
		<form method="post" action="img2.php">
		<button type="submit" class="btn btn-primary " style="position:relative;top:-90px;right:-250px;height:70px;width:250px;font-size:25px;color:black;" name="update"><b>ADD MORE ITEMS</b></button>
		</form>
		


		
	</body>

</html>