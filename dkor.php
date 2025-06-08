<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM kor ";
mysqli_query($conns,$sql_queryd);


header("location:kor1.php");  

?>