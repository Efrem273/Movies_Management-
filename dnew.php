<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM new ";
mysqli_query($conns,$sql_queryd);


header("location:new.php");  

?>