<?php session_start(); ?>
<!DOCTYPE>
<html>

	<head>

		<title>Update Order</title>

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
				border: 1px solid #dddddd;
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
			body{
				background-image:url('wall3.jpg');
				background-repeat:no-repeat;
				background-size:100% 1500px;;
			}
			

		</style>


	</head>

	<body>


		<div id="topbar">
			<p id="welcome"><?php echo "Check the elements to delete/drop: <br>"; ?></p>
		</div>
<form method="post" action="mycart.php">
		<button type="submit" style="background:brown;color:white;height:30px;width:70px;">BACK</button>
		</form>
		<div id="whitespace"></div>


		<form method="post" action="proceed1.php">

			<div class="container">

				<?php

				$db = mysqli_connect('localhost', 'root', '', 'demo');

				if(isset($_POST['update']))
				{

					$sql = "SELECT  c.cartid,c.pid1, p.productname, c.price,c.ipname FROM product p, cart c WHERE p.pid=c.pid1 AND c.custid1={$_SESSION['cust_id']}";
					$result = mysqli_query($db, $sql);


					if(mysqli_num_rows($result) > 0)
					{
						echo "<table style='border:groove;border-width:10px;' >";
						while( $row = mysqli_fetch_assoc($result))
						{
							echo "<tr style='color:yellow;font-size:25px;background:black;opacity:0.6;'><td><input type='checkbox' style='width:20px;height:20px;' name='items[]' value='".$row["cartid"]."'> <img src='".$row['ipname']."' height=100px width=170px /> </td><td> ". $row["productname"]. "</td><td>". $row["price"] ."</td></tr>";

						}
						echo "</table>";
					}
					else
					{
						echo "0 results";
					}

				}
				?>

				<br><br><br>


				<div class="container" style="text-align:right">

					<button type="submit" class="btn btn-primary" name="proceed" style="height:50px;width:150px;font-size:25px;color:black;"><b>Proceed</b></button>

				</div>

			</div>
		</form>







		

	</body>

</html>