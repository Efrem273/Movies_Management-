<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM eng ";
mysqli_query($conns,$sql_queryd);


header("location:eng.php");  

?>