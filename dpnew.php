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
$d2=date("d",time());
$d1=(integer)$d2;
echo($d1);
$temdat=$d1-4;
if ($d1==1) {
	$temdat=31;
}
elseif ($d1==2) {
	$temdat=30;
}elseif ($d1==3) {
	$temdat=29;
}elseif ($d1==4) {
	$temdat=28;
}
$sql_queryd= "DELETE FROM `new` WHERE date_only < $temdat";
mysqli_query($conns,$sql_queryd);

$sql_query= "SELECT * FROM new ORDER BY `dates` DESC";
$x=mysqli_query($conns,$sql_query);
if (!mysqli_query($conns,$sql_query))
{
die("error:".mysql_error());
}

while ($row=mysqli_fetch_array($x)) {
     $container=array();
	echo'(<img src="Newc/'.$row[0].'" width="900px" hieght="900px"/>)';
	array_push($container,'<a href="dnew1.php?bdate='.$row[0].'" style="background:#A63322;color:white">DELETE</a>');
 echo "<h1>".$container[0]."<h1>";
}



mysqli_close($conns);




?>

 </body> </html>