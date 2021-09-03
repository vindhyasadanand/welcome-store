<?php   
session_start();
if(isset($_POST['logout']))
{ //to ensure you are using same session
session_destroy(); 
 
echo"<script>
          window.location.href='shome.html';
            </script>";//destroy the session
//header("location:shome.html"); //to redirect back to "index.php" after logging out
exit();
}
?>