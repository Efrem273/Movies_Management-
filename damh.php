<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM amh ";
mysqli_query($conns,$sql_queryd);


header("location:amh.php");  

?>