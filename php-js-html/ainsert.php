<?php
//$uname=$_POST['uname'];
//$ph=$_POST['phno'];
if(isset($_POST['click']))
{
//$sex=$_POST['gender'];
//$id1 = $_POST['id'];
$cat_id = $_POST['catid'];
$name = $_POST['pname'];
$image = $_POST['pimage'];
$price= $_POST['pprice'];
$con=mysqli_connect("localhost","root","","demo");
$result=mysqli_query($con,"insert into product(categoryid,productname,ipname,price) values ('$cat_id','$name','$image','$price')");
//echo "updated";
//header('Location:sslogin.html');
echo "<script>
alert('Added successfully');
window.location.href='view.php';
</script>";

}

?>
