
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
    $objecttype=$_POST['object'];
    $complain=$_POST['details'];
        $sql="insert into complaintdb values('$cname','$cusn',$croom,'$cdate',$mob,'no','electric','$objecttype','$complain')";
    if(mysqli_query($con,$sql))
    {
        echo "COMPLAIN RECEIVED ";
        echo "MANAGEMENT WILL CONTACT YOU SOON ";
        echo "<br>";  
        echo "Thank you";
        
    }
?>
