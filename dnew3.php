<?php
$conns=mysqli_connect("localhost","root","","employee");
$bdate="";
if(isset($_GET['bdate'])){

	$bdate=$_GET['bdate'];
}
 $sql_queryd= "DELETE FROM new WHERE photo='$bdate' ";
mysqli_query($conns,$sql_queryd);



header("location:dpnew2.php");  

?>