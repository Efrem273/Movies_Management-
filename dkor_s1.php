<?php

$conns=mysqli_connect("localhost","root","","employee");
$bdate="";
if(isset($_GET['bdate'])){

	$bdate=$_GET['bdate'];
}
 $sql_queryd= "DELETE FROM kor_s WHERE photo='$bdate' ";
mysqli_query($conns,$sql_queryd);



header("location:dpkor_s.php");  

?>