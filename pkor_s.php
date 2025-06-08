<html> <head>
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
$sql_query= "SELECT * FROM kor_s ORDER BY `date` DESC";
$x=mysqli_query($conns,$sql_query);
if (!mysqli_query($conns,$sql_query))
{
die("error:".mysql_error());
}

while ($row=mysqli_fetch_array($x)) {

	echo'(<img src="Korea_Series/'.$row[0].'" width="900px" hieght="900px"/>)';
}

mysqli_close($conns);




?>

 </body> </html>