<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM hindi ";
mysqli_query($conns,$sql_queryd);


header("location:hindi1.php");  

?>