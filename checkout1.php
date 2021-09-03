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

			.container {

				text-align: center;
				width: 400px;
			}
			#homePageContainer {

				margin-top: 150px;
			}
			
			
			
		</style>



	</head>

	<body style="background-image:url('d4.jpg');background-size:2000px 900px;height:500px;width:100%;background-repeat:no-repeat;">


<form method="POST" action="logout.php">
		<div class="container" id="homePageContainer">

			<h1 style="color:gold;font-size:40px;"><b>Thank You!!</b></h1>
			
			<h5 style="color:gold;font-size:40px;"><b>Your total bill  : <br><?php echo   "    Rs. ".$_SESSION['total']; ?></b></h5>
	
			</div>

<div class="container" style="text-align:center">

					<button type="submit" class="btn btn-primary" name="logout" style="height:50px;width:150px;font-size:30px;color:black;"><b>Logout</b></button>

				</div>
				
</form>



		

	</body>

</html>