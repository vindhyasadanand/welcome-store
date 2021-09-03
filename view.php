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
/*body{
	background-image:url('wall2.jpg');
}*
		</style>


	</head>

	<body>

		<div id="topbar">
			<p id="welcome"><?php echo "List of Items: <br>"; ?></p>
			<div class="container" style="text-align:right">
                   
				   
				</div>
		</div>
		<form action="shome.html">
					<button type="submit"  class="btn btn-primary" name="logout" style="float:right;">logout</button>
                   </form>
		<form method="post" action="shome.html">
		<button type="submit" style="background:brown;color:white;height:30px;width:70px;">BACK</button>
		</form>

		<div id="whitespace"></div>

		

			<div class="container">

				






<?php

				$db = mysqli_connect('localhost', 'root', '', 'demo');
				$result= mysqli_query($db,"SELECT * FROM product");
				if(mysqli_num_rows($result) > 0)
					{
						echo "<table>";
					for($i=0; $row = mysqli_fetch_assoc($result); $i++)
						{
							echo "<tr><td>  <img src='".$row['ipname']."' height=100px width=170px /></td><td> ". $row["productname"]. "</td><td>". $row["price"]. "</td></tr>" ;
						}
						echo "</table>";
					}
?>
<div class="container" style="text-align:center">
					
					<br><br>
				
					<form  method="POST" action="adelet.php">
                           <button type="submit" class="btn btn-primary " name="delete">Delete</button>
				    </form>
					<form  action="ainsert.html">
					<button type="submit" class="btn btn-primary " name="insert" >Insert</button>
					</form>
					<form   method="POST" action="aupdate.php">
					<button type="submit" class="btn btn-primary " name="update" >Update</button>
					</form>
				</div>

			</div>
		


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


	</body>

</html>