<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM tig ";
mysqli_query($conns,$sql_queryd);


header("location:tig1.php");  

?>