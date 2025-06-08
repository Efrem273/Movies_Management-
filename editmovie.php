<?php
#include('header.php');
#include('connectiontodb.php');
$conns=mysqli_connect("localhost","root","","employee");
$bdate="";
$bcode="";
$balance="";
if(isset($_GET['bdate'])){

  $bdate=$_GET['bdate'];
}
if(isset($_GET['bcode'])){

  $bcode=$_GET['bcode'];
}
if(isset($_GET['balance'])){

  $balance=$_GET['balance'];
}

?>
<?php
$conns=mysqli_connect("localhost","root","","employee");
$sqlshw="SELECT * FROM new WHERE photos='$bdate' AND dates='$bcode' AND  date_only='$balance' ";

            $result=mysqli_query($conns,$sqlshw);
 
          while($row = mysqli_fetch_array($result)){
    
                       $bdate=$row[0];
                      $ban_code=$row[1];
                       $name_org=$row[2];
                      $Sub_org=$row[3]+1;
      
                                            
                            }
    
    
     
     
echo $Sub_org;
  $query="UPDATE new SET 
   photos='$bdate',
    dates='$ban_code',
    date_only='$name_org',
    part ='$Sub_org'
    WHERE photos='$bdate' AND dates='$bcode' AND date_only='$balance'";

    $result=mysqli_query($conns,$query);
     if($result){
      echo "error happen";

     }
  header("location:pnewupdate.php");


?>
                              

               