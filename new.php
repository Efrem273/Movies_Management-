<html>
<head>
<meta charset=utf-8 />
<title>Home </title>
<link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
<!-- Nav bar part -->
<div class="topnav">

 <a href="tig1.php">Tigrina</a>
<a  href="hindi1.php">Hindi</a>
<a  href="kor1.php">Korea</a>
<a  href="tur1.php">Turkey</a>
<a   href="eng1.php">English</a>
<a  href="shw1.php">Show</a>
<a href="intr1.php">Interview</a>
<a   href="eng_s.php">English_Series</a>
<a href="kor_s.php">Korea_Series</a>
<a  href="tur_s.php">Turkey_Series</a>
<a  href="tig_s.php">Tigrina_Series</a>
<a  href="ani.php">Animation</a>
<a   href="doc.php">Documentary</a>
<a   href="com.php">Comedy</a>
<a    href="amh.php">Amharic</a>
<a   href="kana.php">Kana</a>
<a href="msc.php">Music_Clip</a>
<a class="active" href="new.php">New_poster</a>
<a href="new2.php">Mealtawi</a>
<a href="ttig1.php">Turgum_Tigrina</a>
<a  href="eshw1.php">English_Show</a>
</div>
<!-- Center part -->
<div class="bodyContent">
<div style="width:18%; background-color: #efd;">

<img src="image/bachach.PNG" width="200px" height="400px"> </p></div>
<div style="width:60%; background-color: #747;"> 

   <?php
   $count=0;
$nametErr=$idErr=$paassErr=$lastErr="";
if(isset($_POST["form_submitted"])){
foreach ($_FILES['photo']['tmp_name'] as $key => $tmp_name) {
  
    
  $temp=$_FILES['photo']['tmp_name'][$key];
   $name=$_FILES['photo']['name'][$key];
  if(empty($name)){
    $nametErr="Please select the photo first";
 }
else{  
  move_uploaded_file($_FILES['photo']['tmp_name'][$key],'Newc/'.$_FILES['photo']['name'][$key]);
  $conns=mysqli_connect("localhost","root","");
  if(!$conns)
 {
 die('unable to connect:'.mysql_error());
}
mysqli_select_db($conns,"employee");
$date=date("Y-m-d-g:i:A",time());
$date1=date("d",time());
$sql_query= "INSERT INTO  new
values('".$name."','".$date."','".$date1."')";
if (!mysqli_query($conns,$sql_query))
{
die("error:".mysql_error());
}
$count+=1;
mysqli_close($conns);

}
}
echo "<p><span style='background-color: #4CAF50;
color: white'>".$count." images Successfully Uploaded</span></p>";
}
?>
<span style='color:red'> <?php echo $nametErr;?></span>
<span style='color:red'> <?php echo $paassErr;?></span>
<span style='color:red'> <?php echo $idErr;?></span>
<form action="#" method="POST" enctype="multipart/form-data"> 
<h1><p>Upload Amharic Poster: <br><input type="file" name="photo[]" multiple><p></h1>
<input type="hidden" name="form_submitted" value="1" /> 
<p><input type="submit" style="width:17%;font-size:25px;background-color: #4CAF50;color:white" value="New"> </p><br><br><br><br>

<h2><p><a href="dpnew.php"><span style='color:red;'>DELETE_One_by_One</span> </a></p></h2><br>


<h2><p><a href="dnew.php"><span style='color:red;'>DELETE_ALL</span> </a></p></h2>

</form>

</div>
<div style="width:18%; background-color: #eef;">

<img src="image/bachach.PNG" width="200px" height="400px"> 



 </div>
</div>
<!-- Footer part -->
<div class="footerPart" align="Center" style="font-size:15px; background-color: #337;color: White">
<h1><p>WELCOME TO OUR WEBSITE  web developer eng.Efrem Negasi Tel.07643127</p></h1><h4><p>web developer eng.Efrem Negasi Tel.07643127</p>></h4>
</div>
<br><br>
</body>
</html>