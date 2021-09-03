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

		</style>


	</head>

	<body>


		<div id="topbar">
			<p id="welcome"><?php echo "select the item to update <br>"; ?></p>
		</div>

		<div id="whitespace"></div>


		<form method="post" action="finalupdate.php">

			<div class="container">

				<?php

				$db = mysqli_connect('localhost', 'root', '', 'demo');

				if(isset($_POST['update']))
				{

					$sql = "SELECT  * FROM product ";
					$result = mysqli_query($db, $sql);


					if(mysqli_num_rows($result) > 0)
					{
						echo "<table >";
						//while( $row = mysqli_fetch_assoc($result))
							for($i=1; $row = mysqli_fetch_assoc($result); $i++)
						{
							echo "<tr><td><input type='checkbox' name='items[]' value='".$row["pid"]."'>".$i."</td><td> <img src='".$row['ipname']."' height=100px width=170px /> </td><td> ". $row["productname"]. "</td><td> ".$row["price"]."<input type ='text' name='pprice".$row["pid"]."'></td></tr>";

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

					<button type="submit" class="btn btn-primary" name="proceed">Update</button>

				</div>

			</div>
		</form>







		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>

</html>