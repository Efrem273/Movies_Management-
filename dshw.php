<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM shw ";
mysqli_query($conns,$sql_queryd);


header("location:shw.php");  

?>