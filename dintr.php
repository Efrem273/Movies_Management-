<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM intr ";
mysqli_query($conns,$sql_queryd);


header("location:intr.php");  

?>