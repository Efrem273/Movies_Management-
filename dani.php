<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM ani ";
mysqli_query($conns,$sql_queryd);


header("location:ani.php");  

?>