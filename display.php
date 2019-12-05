<html>
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
$sql="select * from roomdb ";
   # $sql="select ravailibility from roomdb where rroomno=$room and rbedno=$bed";
$result=mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
     
    while($row = mysqli_fetch_array($result))
{
         
         if($row['ravailability']='YES')
         {
              echo  $row['rroomno'];
             echo  $row['rbedno'];
              echo "<br>";
         }
           
             
    }
?>
    </body>
    </html>