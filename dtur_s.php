<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM tur_s ";
mysqli_query($conns,$sql_queryd);


header("location:tur_s.php");  

?>