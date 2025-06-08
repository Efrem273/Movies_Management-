<html> <head><title>Registration Form</title>
<style>
.error{

color:red;
}
</style>
 </head>
<body align="center">
<?php

  $conns=mysqli_connect("localhost","root","");
  if(!$conns)
 {
 die('unable to connect:'.mysql_error());
}
mysqli_select_db($conns,"employee");
$sql_query= "SELECT * FROM eng_s ORDER BY `date` DESC";
$x=mysqli_query($conns,$sql_query);
if (!mysqli_query($conns,$sql_query))
{
die("error:".mysql_error());
}

while ($row=mysqli_fetch_array($x)) {
   $container=array();
	echo'(<img src="English_Series/'.$row[0].'" width="900px" hieght="900px"/>)';
	array_push($container,'<a href="deng_s1.php?bdate='.$row[0].'" style="background:#A63322;color:white">DELETE</a>');
 echo "<h1>".$container[0]."<h1>";
}



mysqli_close($conns);




?>

 </body> </html>