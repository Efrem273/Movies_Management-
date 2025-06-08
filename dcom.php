<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM com ";
mysqli_query($conns,$sql_queryd);


header("location:com.php");  

?>