<html>
<meta charset="utf-8">
 <head><title>Registration Form</title>
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



$sql_query= "SELECT * FROM new2";
$x=mysqli_query($conns,$sql_query);
if (!mysqli_query($conns,$sql_query))
{
die("error:".mysql_error());
}

 $allreport=array();
while ($row=mysqli_fetch_array($x)) {
	 $container=array();
	array_push($container,$row[0]);
    array_push($container,$row[3]);
    array_push($container,'<a href="editplus.php?bdate='.$row[0].' & bcode='.$row[1].' & balance='.$row[2].'" style="background:#A63322;color:white">+</a>');
    array_push($container,'<a href="editminus.php?bdate='.$row[0].' & bcode='.$row[1].' & balance='.$row[2].'" style="background:#A63322;color:white">-</a>');
    array_push($allreport,$container); 
   
	
}

echo '<table border="3" width="500px" hight="500px"><tr>
            <th>ዓይነት_ፊልሚ</th>
           <th>ክፋል</th>
             
        </tr>';
foreach ($allreport as $ary) {
    
        echo "<tr>";
        foreach ($ary as $k) {
             echo "<td><h1>".$k."</h1></td>";
            
        }
        echo "</tr>";
    
}

echo "</table>";

 echo '<h2><p><a  href="new2.php">BACk</span> </a></p></h2>';


?>

 </body> </html>