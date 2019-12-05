<html>

<style>
body{
            background-image: url("searbed.jpg");
      background-repeat: no-repeat;
      background-size: 1600px 900px ;
      text-align: center;
      color:bisque;
        }
        </style>


<body>
<?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
if(!$con)
       {
           $str="<b> some error occured in database connectivity<b>";
       }
else
{
    echo "<b><marquee>connection is established succesfully</marquee></b>";
}
$cname=$_POST['sname'];
    $cusn=$_POST['susn'];
    $croom=$_POST['sroom'];
    $cdate=$_POST['sdate'];
    $mob=$_POST['mobile'];
    $foodtype=$_POST['food'];
    $complain=$_POST['details'];
$sql="insert into complaintdb values('$cname','$cusn',$croom,'$cdate',$mob,'no','food','$foodtype','$complain')";
    if(mysqli_query($con,$sql))
    { echo "<img src='a.gif' >";
        echo "<h1>" ;
        echo "<br>" ;
    
        echo "COMPLAIN RECEIVED ";
        echo "MANAGEMENT WILL CONTACT YOU SOON ";
        echo "<br>";  
        echo "Thank you";
        echo "</h1>"; 

        
    }
?>