<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM tig_s ";
mysqli_query($conns,$sql_queryd);


header("location:tig_s.php");  

?>