<?php

$conns=mysqli_connect("localhost","root","","employee");

 $sql_queryd= "DELETE FROM kana ";
mysqli_query($conns,$sql_queryd);



header("location:kana.php");  

?>