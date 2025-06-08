<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM doc ";
mysqli_query($conns,$sql_queryd);


header("location:doc.php");  

?>