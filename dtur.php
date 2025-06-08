<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM tur ";
mysqli_query($conns,$sql_queryd);


header("location:tur.php");  

?>