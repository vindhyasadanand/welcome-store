<?php
 //$uname=$_POST['uname'];
//$ph=$_POST['phno'];
if(isset($_POST['click']))
{
//$sex=$_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$con=mysqli_connect("localhost","root","","demo");
$result=mysqli_query($con,"insert into customer(username,password,email,phone,address) values ('$firstname','$password','$email','$phone','$address')");
//echo "updated";
//header('Location:sslogin.html');
echo "<script>
alert('registered successfully');
window.location.href='sslogin.html';
</script>";

}

?>
