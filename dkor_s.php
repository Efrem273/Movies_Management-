<?php

$conns=mysqli_connect("localhost","root","","employee");
 $sql_queryd= "DELETE FROM kor_s ";
mysqli_query($conns,$sql_queryd);


header("location:kor_s.php");  

?>